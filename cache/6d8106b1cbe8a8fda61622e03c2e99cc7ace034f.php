<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="<?php echo e($page->siteName); ?> Articles" href="/articles"
        class="text-xl ml-6 text-grey-darker hover:text-blue-dark <?php echo e($page->isActive('/articles') ? 'active text-blue-dark' : ''); ?>">
        Articles
    </a>

    <a title="<?php echo e($page->siteName); ?> Products" href="/products"
        class="text-xl ml-6 text-grey-darker hover:text-blue-dark <?php echo e($page->isActive('/products') ? 'active text-blue-dark' : ''); ?>">
        Products
    </a>

    <a title="<?php echo e($page->siteName); ?> About" href="/about"
        class="text-xl ml-6 text-grey-darker hover:text-blue-dark <?php echo e($page->isActive('/about') ? 'active text-blue-dark' : ''); ?>">
        About
    </a>

    <a title="<?php echo e($page->siteName); ?> Contact" href="/contact"
        class="text-xl ml-6 text-grey-darker hover:text-blue-dark <?php echo e($page->isActive('/contact') ? 'active text-blue-dark' : ''); ?>">
        Contact
    </a>
</nav>
