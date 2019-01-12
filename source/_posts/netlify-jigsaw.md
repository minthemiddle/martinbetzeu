---
extends: _layouts.post
section: content
title: Host Jigsaw static content on Netlify
date: 2018-02-22
update: 2019-01-12
description: How to host static pages built by Jigsaw on Netlify
priority: 30
featured: false
categories: [tech]
---

Jigsaw is a very lean static page generator and especially easy to learn for everyone familiar with Laravel and its blade templating language.

[netlify](http://netlify.com) is a fantastic host for static pages with a generous free tier and nice tooling.

One of the coolest features is Continuous Deployment: You create and preview your site locally, commit changes to your Git repo — and Netlify builds static pages using their build image.

Node, Ruby and Python based tools have been well supported for a long time, but PHP just got first class support lately: Netlify’s [Bryce Kahle](https://github.com/brycekahle) updated PHP to version 7.2, improved composer support and made sure that essential extensions like mbstring are in the base image.

Thanks to these changes, it is now super easy to have a continuous Jigsaw (PHP) build that reacts to commits to your Github, Gitlab or Bitbucket repos.

Let me walk you through an example site (see: [minthemiddle/jigsaw-netlify-test](https://github.com/minthemiddle/jigsaw-netlify-test)):

## Install Jigsaw locally.

As I have had problems installing Jigsaw globally, I always install it locally

- `$mkdir jigsaw-netlify-test`
- `cd jigsaw-netlify-test`
- `composer require tightenco/jigsaw`
- `./vendor/bin/jigsaw init`

## Set up Git

- Put your project folder in a git repo via git init
- Create a repo in Github/Bitbucket/Gitlab and add remote repo locally
- Create your first commit: `git commit -am “Initial commit"` and push it to Github: `git push`

## Set up Netlify page

- Log into your Netlify account and create New site from Git
- Select the repo that you just generated

## Create deployment script

Netlify needs to know how to build your site. You can tell it by creating a `netlify.toml` config file:

```yaml
[build]
PHP_VERSION=7.2
command = "gulp --production"
publish = "build_production"
```

This will use PHP7.2, run gulp which will compile assets and build your site using Jigsaw and deploy the static page to the `/build_production` folder from where Netlify publishes it to the web.

## Deploy

Try it out:

- Make some changes in your local Jigsaw page in the `/source` folder.
- Commit your changes
- Push them to your Git repo
- Select the site in Netlify and head over to *Deploys* where you can see your site building
- The build script will automatically install all composer requirements and build your site
- After about 4 minutes the build finishes and your site is live

## Speed it up

- I found out that yarn takes about 2 minutes to install itself and all dependencies in Netlify’s image
- As I often do not need to recompile assets (from Sass or JavaScript bundles), but just change content in my Jigsaw site, I removed the package.json and use jigsaw instead of gulp
- This speeds up the whole build process to only 15 secs (down from 4 minutes)
- This is how my netlify.toml looks like

```yaml
# netlify.toml
[build]

PHP_VERSION=7.2

command = "./vendor/bin/jigsaw build production"
publish = "build_production"
```


