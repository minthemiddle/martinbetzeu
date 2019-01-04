<?php $__env->startSection('content'); ?><p>To design web pages, you should really use a good text editor. Microsoft’s open source text editor Visual Studio Code (VSC) is such a great editor. Here is how I set it up and which plugins help me having a good time while writing HTML and CSS.</p>
<p>(I try to update it whenever there is a new version of VSCode. Latest changes reflected: v1.1.29.1-October 2018)</p>
<h2>Basics</h2>
<p>Installing VSC: You can download Visual Studio Code for free <a href="https://code.visualstudio.com/Download">here</a>. If you happen to be on a Mac, you should really use <a href="https://brew.sh/index_de">Brew</a> to install packages. You can then just install VSC with `brew install visual-studio-code. On Windows, <a href="https://chocolatey.org/">chocolatey</a> would be the equivalent package manager and choco install visualstudiocodethe command to go for.</p>
<p><strong>Always use latest version: </strong>Be sure to always update to the latest version of VSC. Microsoft releases great new features every month and you do not want to miss a single one. Just use <code>Code &gt; Check For Updates…</code></p>
<p><strong>Open Projects:</strong> To open VSC, always browse to your project folder on the terminal and fire up the editor with <code>code .</code>. This way, you open your whole project as one.</p>
<p>This is how a <em>HTML5 Boilerplate</em> project looks like after startup via code .</p>
<p><img src="https://cdn-images-1.medium.com/max/3692/1*1A0UMBTUpLCR9Ld4-HOzXg.png" alt="" /></p>
<p><strong>Use Cmd + P:</strong> To switch between files, you would usually use tabs. That might be still okay with one index.html and one style.css file, but even with our example HTML5 Boilerplate and its many files, it already gets complicated. It is much faster to use Cmd + P with its typeahead functionality to quickly find and edit the file you need. Let me show you what I mean.</p>
<iframe src="https://medium.com/media/35cd56338fe8b8c932f8e72911d7575e" frameborder="0"></iframe>
<p><strong>Use symbols to jump within file: </strong>Wonder, where you defined that h2 heading in your main.css ? Well, you could browse the whole file or memorise it. Or you can just hit cmd+shift+o to quickly go to a definition within your HTML and CSS files.</p>
<p>This is how I would find my <code>&lt;h1&gt;</code> definition in <code>main.css</code>:</p>
<p>Yay, I was lucky. I just hit <code>cmd+shift+o</code>, typed in <code>h</code> and in the typeahead list I already saw the h2 definitions. Of course I can switch with the up and down keys.</p>
<p><img src="https://cdn-images-1.medium.com/max/2854/1*4v5h6h1lrPkeqVzepaIfig.png" alt="" /></p>
<p>Use Emmet: To massively speed up typing HTML, use Emmet. It is a shortcut-language which expands to HTML. You write <code>h2&gt;div*2</code> and hit Tab. It expands to the following.</p>
<pre><code class="language-html">&lt;h2&gt;
      &lt;div&gt;&lt;/div&gt;
      &lt;div&gt;&lt;/div&gt;
&lt;/h2&gt;</code></pre>
<p>Use this <a href="https://docs.emmet.io/cheat-sheet/">cheatsheet</a> to learn all the commands Emmet has.</p>
<h2>Settings</h2>
<p>You can customise all your settings in Code &gt; Preferences &gt; Settings. Here are my most important settings:</p>
<pre><code class="language-js">{ // your settings file must begin like this
      "editor.fontSize": 14, // see note #1    
      "editor.lineHeight": 28, // see note #2
      "editor.wordWrap": "on", // #2
      "workbench.editor.showTabs": "off" // #3
      "editor.minimap.enabled": true, // #4
      "editor.minimap.renderCharacters": true // #4, no comma after the last setting!
}</code></pre>
<ol>
<li>I prefer to have some space between my lines, so I double the linespacing. And I increase the font size so I can move away from my monitor a bit more.</li>
<li>By default, word do not wrap at line endings. I prefer that they do.</li>
<li>As described above, Cmd+P is so much faster than tabs. Switch them off!</li>
<li>Minimaps helps you to keep a bird’s eye overview</li>
</ol>
<h2>Plugins</h2>
<p>There are a few VSC plugins that I can wholeheartedly recommend to you for web design projects.</p>
<p>Just install them with cmd+shift+p , type install and select Extensions: Install . In the search bar, type in the name and click on the install buttons next to the plugin.</p>
<ul>
<li>
<p><strong>beautify</strong>: This gives your HTML and CSS files auto indentation and makes them easier to read.</p>
</li>
<li>
<p><strong>Bootstrap 4 &amp; Font awesome snippets</strong>: With this installed, in every HTML document, you can just type b4 and you get a list of Bootstrap 4 snippets at your fingertips. Very handy!</p>
</li>
<li>
<p><strong>cdnjs</strong>: Quickly add your favourite libraries from the command line. Just enter cmd+shift+p &gt; cdnjs and search for something nice, for example Bulma.</p>
</li>
<li>
<p><strong>Close HTML/XML tag</strong>: Does exactly what it promises. Helps you closing your tags</p>
</li>
<li>
<p><strong>HTML Snippets</strong>: Another set of snippets, this time HTML5 semantic snippets. Has no prefix, just use the tag, so for examplefigure will spit out a whole figure set.</p>
</li>
<li>
<p><strong>Material Icon Theme:</strong> Pure aesthetics, but your folder and files look a lot nicer with this one</p>
</li>
<li>
<p><strong>Sublime Material Theme: </strong>Another eye-candy. See whether you look it. Most people do.</p>
</li>
</ul>
<h2>Notable Features</h2>
<ul>
<li>
<p><a href="https://code.visualstudio.com/updates/v1_27#_path-completion-for-css-imports">Path completion for CSS imports </a>(since v.1.27)</p>
</li>
<li>
<p><a href="https://code.visualstudio.com/updates/v1_23#_css-region-folding">Fold CSS region</a> with /<em> #region </em>/ and /<em> #endregion </em>/ (since v.1.23)</p>
</li>
</ul>
<p><em>How do you set up Visual Studio Code for web design projects? And which other plugins do you use on a regular base?</em></p>
<p><strong>Leave me a comment!</strong></p><?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>