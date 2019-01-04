<?php $__env->startSection('content'); ?><p><a href="https://mailchimp.com/">Mailchimp</a> is a fantastic marketing platform, and takes the pain out of managing email lists and campaigns. The blog starter template comes with a beautiful pre-built newsletter form, that only needs a Mailchimp list URL to send to.</p>
<p>To begin accepting subscribers, simply add your list URL to the form <code>action</code> in the <code>source/_components/newsletter-signup.blade.php</code> file.</p>
<pre><code class="language-html">&lt;!-- source/_components/newsletter-signup.blade.php --&gt;

&lt;div id="mc_embed_signup"&gt;
    &lt;form action="https://your-mail-chimp-list-manage-url" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate&gt;
        &lt;div id="mc_embed_signup_scroll"&gt;
            &lt;h2&gt;Sign up for newsletter&lt;/h2&gt;
            &lt;div class="mc-field-group"&gt;
                &lt;label for="mce-EMAIL"&gt;Email Address &lt;/label&gt;
                &lt;input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email address"&gt;
            &lt;/div&gt;
            &lt;div id="mce-responses" class="clear"&gt;
                &lt;div class="response" id="mce-error-response" style="display:none"&gt;&lt;/div&gt;
                &lt;div class="response" id="mce-success-response" style="display:none"&gt;&lt;/div&gt;
            &lt;/div&gt;    &lt;!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups--&gt;

            &lt;div style="position: absolute; left: -5000px;" aria-hidden="true"&gt;&lt;input type="text" name="b_25582686a9fc051afd5453557_189578c854" tabindex="-1" value=""&gt;&lt;/div&gt;
            &lt;div class="clear"&gt;&lt;input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/form&gt;
&lt;/div&gt;</code></pre>
<h3>Example</h3>
<img src="/assets/img/newsletter.png">
<p><a href="https://mailchimp.com/help/host-your-own-signup-forms/#Edit_your_Custom_Signup_Form">See how to get your Mailchimp list URL.</a></p><?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>