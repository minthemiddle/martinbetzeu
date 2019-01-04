<div class="flex flex-col mb-4">
        <h2 class="text-3xl mt-0">
            <a
                href="{{ $post->getUrl() }}"
                title="Read more - {{ $post->title }}"
                class="text-grey-darkest font-extrabold"
            >{{ $post->title }}</a>

        </h2>


    <p class="mb-4 mt-0">{!! $post->excerpt(200) !!}</p>

    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide mb-2"
    >Read</a>
</div>
