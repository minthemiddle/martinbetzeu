<?php $__env->startSection('content'); ?><h2>Before: Tools with Excel</h2>
<p>I used to write down the total number of tasks in a row in Excel and add a row for my done tasks. I would add a ratio row and do the math to see my progress.</p>
<p>That setup is flexible and worked pretty well, but it looked boring. Well, just like an Excel sheet looks like.</p>
<p><img src="https://cdn-images-1.medium.com/max/2000/1*QZ2RVmws7tw-nuapaM0Jmg.png" alt="Excel tool" /></p>
<p>I need to confess that visuals make a huge motivation difference for me.</p>
<h2>After: Tools with JS, CSS, LocalStorage</h2>
<p>That is why I need a good toolbox for creating helpers that are…</p>
<ul>
<li>Easy to implement</li>
<li>Easy to adjust and extend</li>
<li>Looking nice</li>
</ul>
<p>The modern web universe has such tools:</p>
<ul>
<li><a href="https://gist.github.com/tailwindcss.com">TailwindCSS</a> lets me write beautiful yet flexible UIs in minutes not hours</li>
<li><a href="https://gist.github.com/vuejs.org">VueJS</a> is a drop-in extension to make my HTML dynamic without adding extra tooling</li>
<li><a href="https://www.taniarascia.com/how-to-use-local-storage-with-javascript/">LocalStorage</a> lets me persist all the data that I enter and process</li>
</ul>
<p>Here is how my little example task progress tracker looks like using these tools:</p>
<p><img src="https://cdn-images-1.medium.com/max/2000/1*kP4OduC88p6j1nuM0unmbw.png" alt="" /></p>
<p>Let me do a quick tour of the feature that I use frequently to build tools like this task tracker:</p>
<ul>
<li><strong>TailwindCSS from CDN</strong>: In JSBin I have a boilerplate with Tailwind so the page looks good from line 1 <code>&lt;link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"&gt;</code></li>
<li><strong>Antialiasing</strong> <code>&lt;body class="antialiased"</code> - This smoothes all fonts</li>
<li><strong>VueJS from CDN</strong> <code>&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.3/vue.js"&gt;&lt;/script&gt;</code> Pull in VueJS to make the page dynamic</li>
<li><strong>Quick role-model-binding</strong> To fetch my entries and process them with VueJS, I add a simple v-model: <code>&lt;input v-model=“tasks.done” name=“done"&gt;</code></li>
</ul>
<p>The actual power comes from a few lines of JavaScript. Let me explain with inline comments</p>
<iframe src="https://medium.com/media/85cfd3bff18539cda3a42bae2c85457d" frameborder="0"></iframe>
<h2>Write endless simple tools with this setup</h2>
<p>The combination of the three technologies (HTML + CSS Framework, JavaScript, LocalStorage) makes it super easy to create simple yet flexible and beautiful tools.</p>
<p>Other tools that I built the same way:</p>
<ul>
<li>Day and pomodoro planner</li>
<li>Customized todo app</li>
<li>Cryptocurrency price tracker (using jQuery’s <code>$.getJSON('API-URI')</code> as I did not find a drop in replacement for VueJS)</li>
</ul>
<p>There are endless opportunities to create flexible and good-looking tools for your specific needs in very little time!</p>
<p>Here is the source for the tracking tool:
<a href="http://jsbin.com/koroyap/5/edit?output">JS Bin — Collaborative JavaScript Debugging</a></p>
<p><a href="https://medium.com/@martin_betz/quick-tool-generation-with-vuejs-tailwind-css-and-localstorage-5cfb23bb91b2">https://medium.com/@martin_betz/quick-tool-generation-with-vuejs-tailwind-css-and-localstorage-5cfb23bb91b2</a></p><?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>