---
extends: _layouts.post
section: content
title: Generate PDF invoices from Markdown using Pandoc
date: 2017-01-09
update: 2019-01-05
description: Generate PDF invoices from Markdown using Pandoc
priority: 40
featured: true
categories: [tech, terminal]
slug: pandoc-invoices
---

**TL;DR:** You can use *Pandoc* with *wkthmltopdf* to generate nice-looking PDF invoices from Markdown files.

## The context

I love simplicity, structure and I like good design. When it comes to invoices or other formal documents that you need to generate as a freelancer (such as status reports or fact sheets), these things do not get together easily:

## The commercial or complicated way
Of course, you can fire up *InDesign* or *Apple Pages* and fine-tune your documents, but this comes at a price: you have to create every new document individually as templating and mail-merging is very basic in both programs. Also, you are stuck with proprietary file formats that you might not be able to open in the future (and your tax office may not be happy about that). On the other side, you have *LaTeX* which can output fantastic documents from marked up text but has a steep learning curve and also quite some weight (~ 1GB extra). Also, if you want to use system or OTF fonts, you quickly run into problems. Both *InDesign* and *Pages* also struggle with the generation of HTML5.

## The (rather) easy way
*Pandoc* to the rescue. Pandoc is a handy command-line tool that converts text files between different formats. I use it to convert markdown files with YAML metadata blocks to PDF and HTML5 files. And I can style these documents via CSS3 so I can use all local fonts. To use Avenir Next, which I installed on my machine, I just need `font-family: 'Avenir Neue'` in my CSS.

So how would I create a nice looking invoice?

Here is the template markdown for a fixed-budget project that I did:

```
---
papersize: a4
margin-left: 20mm
margin-right: 25mm
margin-top: 10mm
margin-bottom: 20mm
...

![](img/logo.png){ width=13.587mm height=13.559mm}

Martin Betz | Meine Straße 1 | 123456 Berlin

Mein Kunde
Kurfürstenstraße 123
10961 Berlin

Berlin, 07.01.2017

# Rechnung: Neugestaltung Webseite
## Rechnungsnummer: 170101

Guten Tag Herr Kunde,

für Ihren am 01.01.2017 per Mail erteilten Auftrag für die Neugestaltung der Webseite
[test.de](test.de) berechne ich Ihnen entsprechend Abmachung folgenden Pauschalbetrag:

**6.000€**

Entsprechend §19 UStG erhebe ich als Kleinunternehmer keine Umsatzsteuer.
Abgaben zur Künstlersozialkasse fallen nicht an.

Bitte überweisen Sie den Rechnungsbetrag innerhalb von 14 Tagen
auf untenstehendes Konto bei der Rich Bank.

Vielen Dank für die sehr gute Zusammenarbeit!

Mit freundlichen Grüßen,

![](img/unterschrift_ex.png){ width=33.8mm }
(Martin Betz)

MARTIN BETZ | Meine Straße 1 | 123456 Berlin | (0000) 000 00 000 | xxx@martinbetz.eu
Steuer-Nummer: 00/000/00000 | Bankverbindung | IBAN DE00 0000 0000 0000 0000 00 | BIC XXXXXXXXXXX
```

Note that I entered all my personal, the project and the client data manually, but could have queried them from a database as well. Automation is easy in this workflow.

This is how my output PDF (format: A4, black border for contrast only) looks like:

![Invoice Example](/assets/img/invoices-markdown-example.png)

So how can you make an invoice as pretty or even prettier than this?

### Instructions

1. Install *pandoc*. If you are on Mac, get *Homebrew* and install *pandoc* via `brew install pandoc`. Otherwise, head over to [Pandoc's website](http://pandoc.org/installing.html) and get a package for your machine.
1. Install `wkhtmltopdf` via `brew install Caskroom/cask/wkhtmltopdf` or via the right package from [their website](http://wkhtmltopdf.org/downloads.html). *wkthmltopdf* is an invisible (aka headless) browser which saves documents to PDF.
1. Execute `pandoc invoice.m -t html5 d -o invoice.pdf` in the terminal to output your first version of the invoice PDF. `-t` is for 'to' and indicates the format, `-o … *.pdf` will automatically understand that you want to save it as a PDF
1. To make the invoice prettier, you can add `--css style.css` to the *pandoc* command

Here is my final CSS. I will tell you about some problems, solutions and architecture decisions after the code.

```css
@charset "utf-8";

body {
font-size: 10.5pt;
font-family: 
    "Avenir Next", -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto",
    "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
hyphens: auto;
height: 270mm; /* 297 - 10 (top) - 20 (bottom) */
line-height: 140%;
margin: 0;
padding: 0;
}

code {
font-family: "Source Sans Code", Courier New, Courier, monospace;
margin-left: 1pt;
}

a {
color: black;
margin-left: 1pt;
}

table {
width: 100%;
}

table:nth-of-type(3) {
border: 1px solid black;
padding: 5pt;
}

table:nth-of-type(3) td:nth-of-type(2) {
text-align: center;
}

h1 {
font-size: 13pt;
margin-top: 6pt;
margin-bottom: 0;
}

h2 {
font-size: 10.5pt;
font-weight: normal;
margin-top: 0;
margin-bottom: 20pt;
}

p {
width: 100%;
}

p:first-of-type {
font-size: 9pt;
word-spacing: 1pt;
}

p:nth-of-type(2) {
margin-top: 20mm;
}

p:nth-of-type(3) {
text-align: right;
}

p:nth-last-of-type(3) {
margin-top: 10mm;
}

p:last-of-type {
text-align: justify;
font-size: 9pt;
position: absolute;
bottom: 2mm;
margin-bottom: 0;
padding-bottom: 0;
color: #444;
}

hr {
border: 1px solid #eee;
}

hr:last-of-type {
position: absolute;
bottom: 14mm;
width: 100%;
}

figure {
margin: 0;
}  
```

And now the making-of:

1. Positioning elements was harder than expected: You set the paper size via the YAML metadata, so I thought I could just derive absolute values from there
1. I believed that `body` height should be: `297 (A4 height) - 10 (margin-top) - 10 (margin-bottom) = 277mm`.
1. I tried to position a fold line at 99mm (`297/3`) via `.foldline { position: absolute; top:99mm; }`, but when I printed it, it showed up at 105mm.
1. CSS understands `mm` and `pt` as values, so I used `mm` for positioning and `pt` for font sizes (exactly as in traditional DTP programs)
1. Footer: I first thought about a `Flexbox` layout with fixed footer, but quickly settled on a `position: absolute;` solution as it is enough for my purpose. The calculations, however, were not working as expected so I had to tweak the `bottom: xx mm` settings by hand
1. I tried to justify my footer, but… CSS [cannot justify one-line paragraphs easily](http://stackoverflow.com/questions/23038457/justify-one-line-of-html-text-to-fill-an-entire-line). Ouch…
1. As you cannot set `id`s or `class`es in your markdown for the HTML, you end up with a lot of `<p>`s. I had to make excessive usage of `:nth-of-type()`, `:first-of-type()`, `:last-of-type()` and `:nth-last-of-type`. It would be nice to have a template for the HTML output (it's possible, more on this later)
1. My logo is `*.svg` but that got totally skewed when getting rendered to PDF. I had to generate a high-resolution PNG to get around that.
1. I made dozens of iterations of the CSS to get the design that I wanted. First I did it the hard way: Change CSS, run Pandoc command, open PDF. Then I found out that *PDF Expert* re-renders when the PDF has changed. Still, I had to fire Pandoc after each CSS change manually. So I was looking for "live reloading" and ended up with `fswatch` on Mac (or `inotifywait` on Linux). I put the actual Pandoc command in a Bash script and started the watcher with `fswatch -o . | xargs -n1 ./compile.sh`. It worked. The only downside I encountered was that the PDF would reload in *PDF Expert* every 2 seconds no matter whether there was a change in the CSS not. Flicker, flicker, flicker.

### Make it safer

Now you have a neat invoice PDF from a very simple Markdown file. But: The client could easily edit this PDF, change the cost or copy my signature. You cannot entirely prevent this to happen, but let`s make it a bit more secure.

1. Get the command-line tool *pdftk* `brew install https://raw.githubusercontent.com/turforlag/homebrew-cervezas/master/pdftk.rb
`
1. `pdftk invoice.pdf output invoice-protected.pdf allow printing owner_pw "mysecretpassword"`

The client can still print the secured invoice, but not to change it. Funnily, [PDF Expert](https://pdfexpert.com/de) is ignoring these settings and still able to edit the file. I have no idea why.

### Next steps

The invoice PDF is nice, but of course, we can make it even better. Here are some ideas:

1. Set a base font size in `pt` and set the other sizes relative with `em`
1. Switch the whole styling to `Sass`, predominantly for nesting the `p { %:nth-of-type {} }`
1. *Tables* are a big thing in most non-fixed-price invoices. And a big CSS design challenge
1. Tinkering with `p:nth-of-type(10)`-ish selectors is not too much fun, so probably using an HTML template with some smarter defaults would be good. I did not have much success with loading a new template from a different `--data-dir` but *brew's*, so I copied my template to `/usr/local/Cellar/pandoc/1.16.0.2/share/x86_64-osx-ghc-7.10.3/pandoc-1.16.0.2/data/templates/`
1. Also, I found [another nice template](https://www.redminecrm.com/boards/35/topics/1466-custom-template-for-german-invoice) that I might learn a trick or two from
1. Finally, for cross-media usage, I might add another stylesheet for the web or maybe media queries (but I have no clue whether that works…)

### Resources
- [Homebrew](brew.sh)
- [Pandoc](http://pandoc.org/)
- [WKHTMLTOPDF](http://wkhtmltopdf.org/)

### Q&A

- Why didn't you use a styled *OpenDocument* template? I don't like the fact that you [cannot delete standard style formats](https://ask.libreoffice.org/en/question/19709/how-to-delete-unwanted-styles-and-formatting-options-in-libreoffice/?answer=19720#post-id-19720). I like lean templates. Otherwise, excellent choice!
- Why not via *LaTeX*? Fonts, installation overhead {~900 MB), different markup (see above)

Do you use Pandoc in varying ways for invoice generation? Or do you have other comments or tips? I am very looking forward to your feedback!
