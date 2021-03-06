@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')
    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
    @endif

    <h1 class="leading-none mb-2">{{ $page->title }}</h1>

    <div class="rich-text pb-4" v-pre>
        @yield('content')
    </div>

    @if($page->slug)
    <div class="text-center mt-12 mb-12 bg-gray-200 p-8 border-t-4 border-blue-500">
        <div class="font-bold text-blue-600">Send me your feedback on</div>
        <div>"{{ $page->title }}"</div>
        <p class="flex justify-center" id="cntct-article"></p>
    </div>
    @endif

    <div class="border-b border-t border-blue-100 mt-4 pb-4 pt-4 mb-10">
        <p class="text-gray-600 text-xl md:mt-0">{{ date('F j, Y', $page->date) }}@if($page->update)   •  Last updated: {{ date('F j, Y', $page->update) }}@endif</p>


        @if ($page->categories)
            <p>
            @foreach ($page->categories as $i => $category)
                <a
                    href="{{ '/categories/' . $category }}"
                    title="View posts in {{ $category }}"
                    class="text-sm tracking-wide bg-white text-gray-600 p-2  uppercase"
                >{{ $category }}</a>
            @endforeach
            </p>
        @endif</div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endsection

@push('scripts')
@if($page->slug)
<script>
var el = document.getElementById('cntct-article');
var base = 'feedback+';
var final = base.concat('{{ $page->slug }}');
EO(el, {
  name: final,
  domain: 'martinbetz',
  tld: 'eu',
  altText: 'Email'
});
</script>
@endif
@endpush
