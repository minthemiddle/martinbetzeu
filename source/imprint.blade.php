@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Imprint/Impressum {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Imprint/Impressum of {{ $page->siteName }}" />
@endpush

@section('body')
<h1>Impressum</h1>
@stop
