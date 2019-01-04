<?php $__env->startPush('meta'); ?>
    <meta property="og:title" content="<?php echo e($page->title); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo e($page->getUrl()); ?>"/>
    <meta property="og:description" content="<?php echo e($page->description); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body'); ?>
    <?php if($page->cover_image): ?>
        <img src="<?php echo e($page->cover_image); ?>" alt="<?php echo e($page->title); ?> cover image" class="mb-2">
    <?php endif; ?>

    <h1 class="leading-none mb-2"><?php echo e($page->title); ?></h1>

    <div class="pb-4" v-pre>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <div class="border-b border-t border-blue-lighter mt-4 pb-4 pt-4 mb-10">
        <p class="text-grey-darker text-xl md:mt-0"><?php echo e(date('F j, Y', $page->date)); ?><?php if($page->update): ?>   •  Last updated: <?php echo e(date('F j, Y', $page->update)); ?><?php endif; ?></p>


        <?php if($page->categories): ?>
            <p>
            <?php $__currentLoopData = $page->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a
                    href="<?php echo e('/categories/' . $category); ?>"
                    title="View posts in <?php echo e($category); ?>"
                    class="text-sm tracking-wide bg-white text-grey-dark p-2 rounded uppercase"
                ><?php echo e($category); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
        <?php endif; ?></div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            <?php if($next = $page->getNext()): ?>
                <a href="<?php echo e($next->getUrl()); ?>" title="Older Post: <?php echo e($next->title); ?>">
                    &LeftArrow; <?php echo e($next->title); ?>

                </a>
            <?php endif; ?>
        </div>

        <div>
            <?php if($previous = $page->getPrevious()): ?>
                <a href="<?php echo e($previous->getUrl()); ?>" title="Newer Post: <?php echo e($previous->title); ?>">
                    <?php echo e($previous->title); ?> &RightArrow;
                </a>
            <?php endif; ?>
        </div>
    </nav>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>