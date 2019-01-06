@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Imprint/Impressum {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Imprint/Impressum of {{ $page->siteName }}" />
@endpush

@section('body')
<h1>Imprint</h1>
<p>Responsible person according to German law (§5 TMG):</p>
<ul>
    <li>Martin Betz</li>
    <li>Gustav-Müller-Straße 13a</li>
    <li>10829 Berlin</li>
    <li><span id="cntct"></span></li>
    <li>(030) 60 26 63 04</li>
</ul>
@stop
