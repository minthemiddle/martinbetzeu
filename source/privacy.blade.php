@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Privacy/GDPR {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Privacy and GDPR compliancy of {{ $page->siteName }}" />
@endpush

@section('body')
    <h2 id="gdpr">Privacy/GDPR</h2>

<ul>
  <li><strong>Person Responsible: </strong>I, <a href="/imprint" class="text-grey-darkest font-normal underline">Martin Betz</a>, am the sole responsible person for keeping this site GDPR compliant.</li>
  <li><strong>Data Avoidance: </strong>I respect your privacy and follow the principle of <em>data avoidance</em>.</li>
  <li><strong>Hosting: </strong>I host this static page on <a href="https://www.netlify.com/gdpr/" class="text-grey-darkest font-normal underline">Netlify</a>. They log the IP of visitors for a maximum of 30 days.</li>
  <li><strong>Contact via email: </strong>When you contact me via a <em>email link</em>, I will get your email address. I might use it to answer you.</li>
  <li><strong>Newsletter (Double opt-in)</strong>: When you submit my <em>newsletter</em> sign-up form, you have to confirm your email address to receive my newsletters. I will only use the address to send information about my articles, products and services. You can unsubscribe via the link at the end of every newsletter.</li>
</ul>

@endsection
