---
extends: _layouts.post
section: content
title: How to use Apple Calendar with Pomodoro
date: 2020-01-29
description: How to use Apple Calendar with Pomodoro
priority: 20
featured: false
categories: [productivity]
slug: apple-calendar-pomodoro
---

Breaking down your day in many small 25 minutes blocks is called Pomodoro. Visualizing and managing these blocks can be challenging. Luckily Apple Calendar helps with it. These are my best practices:

- Instead of the default 1 hour blocks, you can set the default to 25. Go to your terminal and enter the following: `defaults write com.apple.iCal 'Default duration in minutes for new event' 25`
- Copy blocks between days pressing `alt` and dragging and dropping the block
- Name your blocks according to the topic of your block, such as `Productivity`
- Use emojis before the name, such as `✓ Productivity`, this will help you find and count your blocks
- Move blocks in 15min steps up and down with`ctrl + alt + down/up` (Hint: Window manager `Magnet` overwrites these keystrokes but can be reconfigured)

![Day with pomodoros in Apple Calendar](/assets/img/articles/pomo-apple-calendar.png)
