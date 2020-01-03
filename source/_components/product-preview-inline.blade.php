<div class="flex flex-col mb-4">
        <h2 class="text-3xl mt-0">
            <a
                href="{{ $post->link }}"
                title="Read more - {{ $post->title }}"
                class="font-extrabold"
                target="_blank"
            >{{ $post->title }}</a>

        </h2>

        <p class="text-gray-600 text-sm md:mt-0">{{ date('M j, Y', $post->date) }} @if ($post->update)   •  Last updated: {{ date('M j, Y', $post->update) }}@endif</p>

        <p class="mb-4 mt-0">{!! $post->excerpt() !!}</p>

        @if ($post->link)
        <a href="{{ $post->link }}" target="_blank" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-6 h-6" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
            <span class="ml-2">{{ $post->link }}</span>
        </a>
        @endif

    {{-- <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide mb-2"
    >Read</a> --}}
</div>
