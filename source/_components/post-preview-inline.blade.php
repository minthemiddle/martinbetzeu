<div class="flex flex-col mb-4">
        <h2 class="text-3xl mt-0">
            <a
                href="{{ $post->getUrl() }}"
                title="Read more - {{ $post->title }}"
                class="text-grey-darkest font-extrabold"
            >{{ $post->title }}</a>

        </h2>

        <p class="text-grey-darker text-sm md:mt-0">{{ date('M j, Y', $post->date) }} @if ($post->update)   •  Last updated: {{ date('M j, Y', $post->update) }}@endif</p>

    <p class="mb-4 mt-0">{!! $post->excerpt() !!}</p>

    {{-- <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide mb-2"
    >Read</a> --}}
</div>
