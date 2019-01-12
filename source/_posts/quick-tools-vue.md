---
extends: _layouts.post
section: content
title: Quick tools with VueJS
date: 2018-02-25
description: Quick tool generation with VueJS, Tailwind CSS and LocalStorage
categories: [tech]
priority: 2
language: en
slug: vue-quick-tools
---

## Before: Tools with Excel

I used to write down the total number of tasks in a row in Excel and add a row for my done tasks. I would add a ratio row and do the math to see my progress.

That setup is flexible and worked pretty well, but it looked boring. Well, just like an Excel sheet looks like.

![Excel tool](/assets/img/articles/vuejs-excel-tool.png)

I need to confess that visuals make a huge motivation difference for me.

## After: Tools with JS, CSS, LocalStorage

That is why I need a good toolbox for creating helpers that are…

- Easy to implement
- Easy to adjust and extend
- Looking nice

The modern web universe has such tools:
- [TailwindCSS](https://gist.github.com/tailwindcss.com) lets me write beautiful yet flexible UIs in minutes not hours
- [VueJS](https://gist.github.com/vuejs.org) is a drop-in extension to make my HTML dynamic without adding extra tooling
- [LocalStorage](https://www.taniarascia.com/how-to-use-local-storage-with-javascript/) lets me persist all the data that I enter and process

Here is how my little example task progress tracker looks like using these tools:

![VueJS Todo Counter](/assets/img/articles/vuejs-todo-counter.png)

Let me do a quick tour of the feature that I use frequently to build tools like this task tracker:

- **TailwindCSS from CDN**: In JSBin I have a boilerplate with Tailwind so the page looks good from line 1 `<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">`
- **Antialiasing** `<body class="antialiased"` - This smoothes all fonts
- **VueJS from CDN** `<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.3/vue.js"></script>` Pull in VueJS to make the page dynamic
- **Quick role-model-binding** To fetch my entries and process them with VueJS, I add a simple v-model: `<input v-model=“tasks.done” name=“done">`

The actual power comes from a few lines of JavaScript. Let me explain with inline comments

```javascript
var app = new Vue({},
computed: { /* Calculate the ratio */
    ratio: function() {
        return Math.floor(this.tasks.done / this.tasks.total * 100) + '%'
    }
},
watch: { /* Observe changes and write to LocalStorage */
    tasks: {
        handler() {
            console.log('Tasks changed');
            localStorage.setItem('tasks', JSON.stringify(this.tasks));
        },
        deep: true,
    }
},
mounted() { /* Load values from LocalStorage and load */
    console.log('App mounted');
    if (localStorage.getItem('tasks')) this.tasks = JSON.parse(localStorage.getItem('tasks'));
}
})
```

## Write endless simple tools with this setup

The combination of the three technologies (HTML + CSS Framework, JavaScript, LocalStorage) makes it super easy to create simple yet flexible and beautiful tools.

Other tools that I built the same way:

- Day and pomodoro planner
- Customized todo app
- Cryptocurrency price tracker (using jQuery’s `$.getJSON('API-URI')` as I did not find a drop in replacement for VueJS)

There are endless opportunities to create flexible and good-looking tools for your specific needs in very little time!

Here is the source for the tracking tool:
[JS Bin — Collaborative JavaScript Debugging](http://jsbin.com/koroyap/5/edit?output)

https://medium.com/@martin_betz/quick-tool-generation-with-vuejs-tailwind-css-and-localstorage-5cfb23bb91b2

