@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Services I offer. {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>Services</h1>
    <p>I have been helping clients big and small from all over the world finding their goals and focus for digital projects for over 15 years. I am a trained designer and programmer. And I am a business graduate. I guide clients in and between both worlds in an agile iterative way.</p>
    <p>For two big German employers' associations, I developed systems to handle strikes. I made the web strategy for the big Indonesian hotel chain <em>Samali</em>. I helped German politicians such as <em>Britta Hasselmann</em> and <em>Volker Beck</em> to find their digital voice.</p>
    <p>I have limited time for freelance projects as I'm full-time CEO of a tech foundation. Hence, I only take up projects that interest me.</p>
    <p>If you look for support for an interesting digital project with a minimum budget of 5.000€, let's talk:</p>
    <span id="cntct-contact"></span>
@endsection

@push('scripts')
<script>
  var el = document.getElementById('cntct-contact');
    EO(el, {
      name: 'contact+services',
      domain: 'martinbetz',
      tld: 'eu',
      altText: 'Email'
    });
</script>
@endpush
