---
extends: _layouts.post
section: content
title: Use Dash snippets for frequently-used text
date: 2017-01-06
update: 2017-01-06
description: Use Dash snippets for frequently-used text
priority: 10
featured: false
categories: [tech]
slug: dash-snippets-frequent-text
---

If you are like me, you get a lot of business and personal mail. Often the answer is repeated over and over. When I lived in Istanbul, my friends (and even their friends) asked me for trip advice, other friends want to start learning to code and ask me for the best resources.

## TL;DR

You can use [*Dash*](https://kapeli.com/dash) (on OSX) to quickly access and adjust text templates that you often use with [*Dash's snippets*](https://kapeli.com/dash_guide#introductionToSnippets).

## Before: Snippets as text files

I saved quite a few text snippets as simple `*.txt` files that I would quickly find via *Apple Spotlight*'s full-text search capability. So with the request for coding advice as an example, the steps involved where:

1. Receive a mail about `coding resources`
2. Hit reply
2. Fire up *Spotlight* (`⌘+Space`) with the search query `coding resources`
3. Open `reply_coding_resources.txt` with a double-click in *TextEdit*
4. Copy the content
5. Paste it in the reply
6. Browse the snippet and adjust salutation and minor details that differed from the snippet
7. Hit send


## Can I streamline that?

After repeating these seven steps over and over, my programmer self thought about how to simplify this. I took a look at [TextExpander](https://smilesoftware.com/textexpander) – I would not mind paying $3.50 a month for an ever-evolving product, but the problem set for snippets is finite and already well being worked on and [aText](https://www.trankynam.com/atext/) – good feature set and price, but I did not like the UI and workflow too much.

When I inserted some HTML snippets, it instantly dawned on me:
I already have a tool for managing snippets – *`Dash`*.

## After: Dash Snippets

Dash is an offline-first documentation browser for programming languages for Mac OS X. You can download and browse documentations for a large number of languages – and save snippets that you can use in any program. It's about $25 once, but for that price you get an excellent documentation browser and a snippet tool. Dash uses Mac's accessibility tools, so you first need to enable it in your Mac's settings.

You can set triggers that paste the snippets. For your non-programming text snippets, I would advise you to use an indicator not being used in the programming languages you use.

I use `§` for this. In your snippet you can use `__placeholder__` for, you guess it, a placeholder that you can fill interactively when you paste the snippet.

So here is the workflow for the same *coding advice* snippet from earlier. I'm assuming that Dash is set up to run at startup and is now sitting in the background waiting for your command.

1. Receive a mail about `coding resources`
2. Hit reply
3. Type `§codingresources`
4. Change the salutation interactively
5. Hit send

It's not only two steps less than with my previous solution, but also faster and less error prone. At the beginning, I tried to come up with really short indicators, such as `§cdrsc` but of course, these are hard to memorise. So I would advise you to use full-length descriptions.

You could use this technique not only for quick personal responses about coding resources but also for an easy customer support. It is fast, easy and with no big learning curve.
