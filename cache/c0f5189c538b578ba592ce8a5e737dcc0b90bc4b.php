<entry>
    <id><?php echo e($entry->getUrl()); ?></id>
    <link type="text/html" rel="alternate" href="<?php echo e($entry->getUrl()); ?>" />
    <title><?php echo e($entry->title); ?></title>
    <published><?php echo e(date(DATE_ATOM, $entry->date)); ?></published>
    <updated><?php echo e(date(DATE_ATOM, $entry->date)); ?></updated>
    <author>
        <name><?php echo e($entry->author); ?></name>
    </author>
    <summary type="html"><?php echo e($entry->excerpt()); ?>...</summary>
    <content type="html"><![CDATA[
        <?php echo $__env->make('_posts.' . $entry->getFilename(), \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    ]]></content>
</entry>
