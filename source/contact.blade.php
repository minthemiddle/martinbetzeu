@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('body')
<h1>Contact</h1>

<p>
    Yes, I love to hear your stories, feedback and ideas to everything I create. I also love to network. The limited time I can put aside I like to dedicate fully to creating high quality articles and products.
</p>

<p> I have clear priorities and will spend all of my available time on the following:</p>

<ul>
    <li><a href="/products/soloheroes">SoloHeroes</a></li>
</ul>

<p>
    If you have feedback, an offer, opportunity, or introduction that is connected to any of these projects or anything that might make my life more interesting, e-mail me: <br>
    <span id="cntct"></span>
</p>
<p>For the reasons stated above, I’ll only respond to those proposals that are a good match for my schedule and priorities.</p>

@stop
