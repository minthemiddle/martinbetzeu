<?php

return [
    'baseUrl' => 'http://localhost:3000',
    'production' => false,
    'siteName' => 'Martin Betz',
    'siteSignature' => 'MB>',
    'siteDescription' => 'Articles, services and products of Martin Betz',
    'siteAuthor' => 'Martin Betz',

    // collections
    'collections' => [
        'posts' => [
            'author' => 'Martin Betz',
            'sort' => '-priority',
            'path' => 'articles/{filename}',
        ],
        'testimonials' => [
            'sort' => '-name',
        ],
        'products' => [
            'path' => 'products/{slug}',
            'sort' => '-priority',
        ],
        'categories' => [
            'path' => '/categories/{filename}',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },
        ],
    ],

    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'excerpt' => function ($page, $length = 255) {
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $page->getContent()),
            '<code>'
        );

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
];
