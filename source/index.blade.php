@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->blogDescription }}" />
@endpush

@section('body')

    @include('_components.about-text')
    <hr class="border-b my-8">

    <p class="uppercase tracking-wide text-sm text-grey-darker mb-0">Current project</p>

    @foreach ($products->where('featured', true) as $featuredPost)
        <div class="w-full mb-6">
            @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
            @endif

            <h2 class="text-3xl mt-0">
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-grey-darkest font-extrabold">
                    {{ $featuredPost->title }}
                </a>
            </h2>

            <p class="mt-0 mb-4">{!! $featuredPost->excerpt() !!}</p>

            <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}"class="uppercase tracking-wide mb-4">
                Read
            </a>
        </div>

        @if (! $loop->last)
            <hr class="border-b my-6">
        @endif
    @endforeach

    @include('_components.newsletter-signup')

    <p class="uppercase tracking-wide text-sm text-grey-darker mb-0">Featured articles</p>

    @foreach ($posts->where('featured', true)->where('language', '!=', 'de')->take(6)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6">
            @foreach ($row as $post)
                <div class="w-full md:w-1/2 md:mx-6">
                    @include('_components.post-preview-inline')
                </div>

                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach
@stop
