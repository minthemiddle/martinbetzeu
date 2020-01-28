---
extends: _layouts.post
section: content
title: How I deploy my Jigsaw blog to Github Pages
date: 2020-01-28
description: How I deploy my Jigsaw blog to Github Pages
priority: 40
featured: true
categories: [tech]
slug: deploy-jigsaw-github-pages
---

I use Tighten's Jigsaw to build this website and blog. I used to host it on Netlify and let it build it as well. But as I make many granular edits and the build taking two 2 minutes, I was looking for a quicker alternative where I just push the output HTML files instead of the source files. Turns out that Github Pages is what I looked for.

Since I had some problems setting it up, here is my final working solution:

- For every now post, I create a feature branch, say `add-article-jigsaw-github-pages-deployment`
- When done, I go to master and merge: `gcm && gm add-article-jigsaw-github-pages-deployment` (using `zsh` aliases)
- Then I check out a running branch called `gh-pages`. I do not want the changes to the HTML in my master, so I just save them here
- In `gh-pages` I first rebase to put the output HTML commits ahead of master: `grbm`
- Then I run Jigsaw: `npm run production`
- Next I create a bump commit with date and running number: `ga . && gcmsg "Bump: 200128-001"`
- Then I force push just the subdirectory `build_production` with the following command:

````
git subtree split --prefix build_production`:gh-pages --force
```

- I also have an alias for that in my `~/.zshrc`: `ghpmb` (where mb stands for martinbetz)
- That's it!
