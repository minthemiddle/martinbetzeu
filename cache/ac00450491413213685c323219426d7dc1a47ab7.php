<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="list-reset my-0">
        <li class="pl-4">
            <a
                title="<?php echo e($page->siteName); ?> Articles"
                href="/articles"
                class="nav-menu__item hover:text-blue <?php echo e($page->isActive('/articles') ? 'active text-blue' : ''); ?>"
            >Articles</a>
        </li>
        <li class="pl-4">
            <a
                title="<?php echo e($page->siteName); ?> Products"
                href="/products"
                class="nav-menu__item hover:text-blue <?php echo e($page->isActive('/products') ? 'active text-blue' : ''); ?>"
            >Products</a>
        </li>
        <li class="pl-4">
            <a
                title="<?php echo e($page->siteName); ?> About"
                href="/about"
                class="nav-menu__item hover:text-blue <?php echo e($page->isActive('/about') ? 'active text-blue' : ''); ?>"
            >About</a>
        </li>
        <li class="pl-4">
            <a
                title="<?php echo e($page->siteName); ?> Contact"
                href="/contact"
                class="nav-menu__item hover:text-blue <?php echo e($page->isActive('/contact') ? 'active text-blue' : ''); ?>"
            >Contact</a>
        </li>
    </ul>
</nav>
