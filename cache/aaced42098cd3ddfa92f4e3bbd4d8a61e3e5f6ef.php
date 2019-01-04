<?php $__env->startPush('meta'); ?>
    <meta property="og:title" content="About <?php echo e($page->siteName); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo e($page->getUrl()); ?>"/>
    <meta property="og:description" content="A little bit about <?php echo e($page->siteName); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body'); ?>
    <h1>About</h1>

    <img src="/assets/img/profil-martinbetz.jpg"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">I am Martin. I am the CEO of <a href="https://code.design" target="_blank">Code+Design Initiative</a> – a non-profit which runs hackathons to get young people into tech.</p>

    <p class="mb-6">I also freelance: I help my clients to define and reach their digital goals. I create strategies and work on the code and design with partners. I only take up new projects with a minimum budget of 5.000 € net.</p>

    <p class="mb-6">You can find more of my articles on <a href="https://medium.com/@martin_betz">Medium</a> and <a href="https://dev.to/martin_betz">dev.to</a>.</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>