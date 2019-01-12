---
extends: _layouts.post
section: content
title: How to use Visual Studio Code for web design
date: 2018-03-06
update: 2019-01-04
description: How to use Visual Studio Code for web design
categories: [tech]
featured: true
priority: 50
---

To design web pages, you should really use a good text editor. Microsoft’s open source text editor Visual Studio Code (VSC) is such an editor. Here is how I set it up and which plugins help me having a good time while writing HTML and CSS.

I update this article whenever there is a new version of VSCode. (Latest changes reflected: [v1.30.2-Novemer 2018](https://code.visualstudio.com/updates/v1_30)

## Basics

**Installing VSC:** You can download Visual Studio Code for free [here](https://code.visualstudio.com/Download). If you happen to be on a Mac, you should really use [Brew](https://brew.sh/index_de) to install packages. You can then just install VSC with `brew install visual-studio-code`. On Windows, [chocolatey](https://chocolatey.org/) would be the equivalent package manager and `choco install visualstudiocode` the command to go for.

**Always use latest version:** Be sure to always update VSC to the latest version. Microsoft releases great new features every month and you do not want to miss a single one. Just use `Code > Check For Updates…`

**Open Projects:** To open VSC, always browse to your project folder on the terminal and fire up the editor with `code .`. This way, you open your whole project as one.

This is how a *HTML5 Boilerplate* project looks like after startup via code .

![](https://cdn-images-1.medium.com/max/3692/1*1A0UMBTUpLCR9Ld4-HOzXg.png)

**Use `Cmd+P`:** To switch between files, you would usually use tabs. That might be okay when you have one `index.html` and one `style.css` file, but even with our example HTML5 Boilerplate and its many files, it already gets complicated. It is much faster and visually pleasing to use `cmd+p` with its typeahead functionality to quickly find and edit the file you need. Let me show you what I mean.

<video src="/assets/video/vsc-webdesign.webm" class="w-full" controls="true"></video>

**Use symbols to jump within file:** Wonder, where you hid that `h2` heading in your `main.css`? Well, you could browse the whole file or memorise it. Or you can just hit `cmd+shift+o` to quickly go to a definition within your HTML and CSS files.

This is how I would find my `<h1>` definition in `main.css`:

I just hit `cmd+shift+o`, type in `h` and in the typeahead list I already see the `h2` definitions. Of course I can switch with the up and down keys.

![](https://cdn-images-1.medium.com/max/2854/1*4v5h6h1lrPkeqVzepaIfig.png)

**Use Emmet**: To massively speed up typing HTML, use Emmet. It is a shortcut-language which expands to HTML. You write `h2>div*2` and hit Tab. It expands to the following.

```html
<h2>
      <div></div>
      <div></div>
</h2>
```

Use this [cheatsheet](https://docs.emmet.io/cheat-sheet/) to learn all the commands Emmet has.

## Settings

You can customise all your settings in `Code > Preferences > Settings`. Here are my most important settings:

```js
{ // your settings file must begin like this
      "editor.fontSize": 14, // see note #1    
      "editor.lineHeight": 28, // see note #2
      "editor.wordWrap": "on", // #2
      "workbench.editor.showTabs": "off" // #3
      "editor.minimap.enabled": true, // #4
      "editor.minimap.renderCharacters": true // #4, no comma after the last setting!
}
```

1. I prefer to have some *space between* my lines, so I double the linespacing. And I increase the font size so I can move away from my monitor a bit more.
1. By default, words do not wrap at line endings. I prefer that they do.
1. As described above, `cmd+p` is so much faster than tabs. Use this, not tabs!
1. *Minimaps* helps you to keep a bird’s eye overview

## Plugins

There are a few VSC plugins that I can wholeheartedly recommend to you for web design projects.

Just install them with `cmd+shift+p`, type `install` and select `Extensions: Install`. In the search bar, type in the name and click on the install buttons next to the plugin.

- **beautify**: This gives your HTML and CSS files auto indentation and makes them easier to read.
- **Bootstrap 4 & Font awesome snippets**: With this installed, in every HTML document, you can just type b4 and you get a list of Bootstrap 4 snippets at your fingertips. Very handy!
- **cdnjs**: Quickly add your favourite libraries from the command line. Just enter `cmd+shift+p > cdnjs` and search for something nice, for example Bulma.
- **Close HTML/XML tag**: Does exactly what it promises. Helps you closing your tags
- **HTML Snippets**: Another set of snippets, this time HTML5 semantic snippets. Has no prefix, just use the tag, so for examplefigure will spit out a whole figure set.
- **Material Icon Theme:** Pure aesthetics, but your folder and files look a lot nicer with this one
- **Sublime Material Theme:** Another eye-candy. See whether you like it. Most people do.

## Notable Features

These are a few features that are relatively new and might help you more than they do help me right now…

- [Custom HTML tags/attributes](https://code.visualstudio.com/updates/v1_30) (since v.1.30)
- [Path completion for CSS imports ](https://code.visualstudio.com/updates/v1_27#_path-completion-for-css-imports)(since v.1.27)
- [Fold CSS region](https://code.visualstudio.com/updates/v1_23#_css-region-folding) with /* #region */ and /* #endregion */ (since v.1.23)

*How do you set up Visual Studio Code for web design projects? And which other plugins do you use on a regular base?*
