<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Articles" href="/articles"
        class="text-xl ml-6 text-gray-900 hover:text-blue-600 {{ $page->isActive('/articles') ? 'active text-blue-600' : '' }}">
        Articles
    </a>

    <a title="{{ $page->siteName }} Products" href="/products"
        class="text-xl ml-6 text-gray-900 hover:text-blue-600 {{ $page->isActive('/products') ? 'active text-blue-600' : '' }}">
        Products
    </a>

    <a title="{{ $page->siteName }} Services" href="/services"
        class="text-xl ml-6 text-gray-900 hover:text-blue-600 {{ $page->isActive('/services') ? 'active text-blue-600' : '' }}">
        Services
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="text-xl ml-6 text-gray-900 hover:text-blue-600 {{ $page->isActive('/contact') ? 'active text-blue-600' : '' }}">
        Contact
    </a>

    <a href="/rss/feed.atom">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-xl ml-6 text-gray-900 hover:text-blue-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rss"><path d="M4 11a9 9 0 0 1 9 9"></path><path d="M4 4a16 16 0 0 1 16 16"></path><circle cx="5" cy="19" r="1"></circle></svg>
    </a>
</nav>
