<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Articles" href="/articles"
        class="text-xl ml-6 text-grey-darker hover:text-blue-dark {{ $page->isActive('/articles') ? 'active text-blue-dark' : '' }}">
        Articles
    </a>

    <a title="{{ $page->siteName }} Products" href="/products"
        class="text-xl ml-6 text-grey-darker hover:text-blue-dark {{ $page->isActive('/products') ? 'active text-blue-dark' : '' }}">
        Products
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="text-xl ml-6 text-grey-darker hover:text-blue-dark {{ $page->isActive('/about') ? 'active text-blue-dark' : '' }}">
        About
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="text-xl ml-6 text-grey-darker hover:text-blue-dark {{ $page->isActive('/contact') ? 'active text-blue-dark' : '' }}">
        Contact
    </a>
</nav>
