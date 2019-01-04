<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="<?php echo e($page->meta_description or $page->siteDescription); ?>">

        <meta property="og:title" content="<?php echo e($page->title ?  $page->title . ' | ' : ''); ?><?php echo e($page->siteName); ?>"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo e($page->getUrl()); ?>"/>
        <meta property="og:description" content="<?php echo e($page->siteDescription); ?>" />

        <title><?php echo e($page->siteName); ?><?php echo e($page->title ? ' | ' . $page->title : ''); ?></title>

        <link rel="home" href="<?php echo e($page->baseUrl); ?>">
        <link rel="icon" href="/favicon.ico?v=5">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="<?php echo e($page->siteName); ?> Atom Feed">

        <?php echo $__env->yieldPushContent('meta'); ?>

        <?php if($page->production): ?>
            <!-- Insert analytics code here -->
        <?php endif; ?>

        <link rel="stylesheet" href="<?php echo e(mix('css/main.css', 'assets/build')); ?>">
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-grey-lightest text-grey-darkest leading-normal font-sans">
        <header class="border-t-2 flex items-center shadow bg-white border-b h-24 py-4" role="banner">
            <div class="pin-t bg-blue-light h-1 absolute w-full"></div>
            <div class="container flex items-center max-w-xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="<?php echo e($page->siteName); ?> home" class="inline-flex items-center">
                        <h1 class="text-2xl md:text-3xl text-blue font-semibold my-0"><?php echo e($page->siteName); ?></h1>
                    </a>
                </div>

                <div class="flex flex-1 justify-end items-center">


                    <?php echo $__env->make('_nav.menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <?php echo $__env->make('_nav.menu-toggle', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </header>

        <?php echo $__env->make('_nav.menu-responsive', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <main role="main" class="flex-auto w-full container max-w-xl mx-auto py-16 px-6">


            <?php echo $__env->yieldContent('body'); ?>
        </main>

        <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">

            <ul class="flex flex-col md:flex-row justify-center list-reset">
                <li class="md:mr-2">
                    &copy; Martin Betz <?php echo e(date('Y')); ?>.
                </li>

                <li>
                    <a href="/privacy">Privacy/Datenschutz</a>
                </li>
                <li class="ml-2">
                    <span id="cntct"></span>
                </li>
            </ul>
        </footer>

        <script src="<?php echo e(mix('js/main.js', 'assets/build')); ?>"></script>

        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html>
