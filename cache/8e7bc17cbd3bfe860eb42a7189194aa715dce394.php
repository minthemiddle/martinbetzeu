<?php $__env->startSection('content'); ?><p>This is the start of your first blog post.</p>
<div class="text-sm">
    Changelog:
</div><?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>