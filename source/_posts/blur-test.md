---
extends: _layouts.post
section: content
title: CSS blur test
date: 2018-12-20
update: 2019-01-12
description: Evaluate website hierarchies with CSS blur test
priority: 30
featured: false
categories: [tech, design, quicktip]
---

**TL;DR:** To evaluate the hierarchies on your website, use the `filter: blur(5px)` style on your `<body>` element.

## Why hierarchies matter

Not everything is equally important on your website: Every single page should have *one single goal* (signing up for a newsletter, click the buying button, display the one information everyone looks for).

Also, some *elements belong together* to give the reader orientation (image and label, intro and list). Whitespace at the right amount and place is what gives orientation, and structure.

## How to test hierarchies

To test your hierarchies, it helps to get a bird's eye view over your website.

The best way to test your hierarchies is the *blur test*. By blurring out the specific content, you will quickly recognize borders, space and sizing.

## How to apply blur effect in CSS

The quickest way to do the blur test is by using the `blur` CSS filter.

You can either create an own class and apply it when testing:

```html
<style>
.blurtest {
    filter: blur(5px);
}
</style>
<body class="blurtest">
</body>
```

Or you simply create an on-the-fly class using Chrome's DevTools or Firefox' Inspector

<img class="border-2 rounded border-grey shadow-inline" src="/assets/img/articles/blurtest-inspector.png" alt="">
