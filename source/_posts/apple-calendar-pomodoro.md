---
extends: _layouts.post
section: content
title: How to use Apple Calendar with Pomodoro
date: 2020-01-29
update: 2020-01-31
description: How to use Apple Calendar with Pomodoro
priority: 30
featured: false
categories: [productivity]
slug: apple-calendar-pomodoro
---

Breaking down your day in many small 25 minutes blocks is called Pomodoro. Visualizing and managing these blocks can be challenging. Luckily Apple Calendar helps with it. These are my best practices:

- Create an extra calendar just for day planning
- Instead of the default 1 hour blocks, you can set the default to 25. Go to your terminal and enter the following: `defaults write com.apple.iCal 'Default duration in minutes for new event' 25`
- Name your blocks according to the topic of your block, such as `Productivity`
- Use emojis before the name, such as `📎 Sorting`, this will help you find and count your blocks
- Plan at least 5 minutes between each pomodoro block
- Click `shift` to select several blocks
- Move blocks in 15min steps up and down with`ctrl + alt + down/up` (Hint: Window manager `Magnet` overwrites these keystrokes but can be reconfigured)
- Copy blocks between days pressing `alt` and dragging and dropping the block
- Use a past day and week when you did not use the system yet and fill with template blocks to create a library
- Use search to find blocks in your library that you do not have readily available from the past few days; typing the first few characters will suffice
- Always use a second physical timer (I use a kitchen timer where I removed the audio signals) to stay in the time frame
- Always adjust differences like delays, skipped or extra pomodoros when or even after they happen – no plan is perfect anyway

![Day with pomodoros in Apple Calendar](/assets/img/articles/pomo-apple-calendar.png)
