@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content pl-xl-4 pr-xl-5">
    <h1 class="page-title">Badges</h1>
    <p class="lead">Documentation and examples for badges, our small count and labeling component. Read the <a href="https://getbootstrap.com/docs/4.3/components/badge/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
    <hr>
    <h4 id="default">Defalult badges</h4>
    <p class="mb-3">Badges scale to match the size of the immediate parent element by using relative font sizing and <code>em</code> units.</p>
    <div class="example">
      <h1>Example heading <span class="badge badge-primary">New</span></h1>
      <h2>Example heading <span class="badge badge-primary">New</span></h2>
      <h3>Example heading <span class="badge badge-primary">New</span></h3>
      <h4>Example heading <span class="badge badge-primary mb-1">New</span></h4>
      <h5>Example heading <span class="badge badge-primary mb-1">New</span></h5>
      <h6>Example heading <span class="badge badge-primary">New</span></h6>
    </div>
    <figure class="highlight" id="defaultBadge">
<pre><code class="language-markup"><script type="script/prism-html-markup"><h1>Example heading <span class="badge badge-primary">New</span></h1>
<h2>Example heading <span class="badge badge-primary">New</span></h2>
<h3>Example heading <span class="badge badge-primary">New</span></h3>
<h4>Example heading <span class="badge badge-primary">New</span></h4>
<h5>Example heading <span class="badge badge-primary">New</span></h5>
<h6>Example heading <span class="badge badge-primary">New</span></h6></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultBadge"><i data-feather="copy"></i></button>
    </figure>
    <p class="mb-3 mt-5">Badges can be used as part of links or buttons to provide a counter.</p>
    <div class="example">
      <button type="button" class="btn btn-primary">
          Notifications <span class="badge badge-light">4</span>
      </button>
    </div>
    <figure class="highlight" id="buttonBadge">
<pre><code class="language-markup"><script type="script/prism-html-markup"><button type="button" class="btn btn-primary">
  Notifications <span class="badge badge-light">4</span>
</button></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#buttonBadge"><i data-feather="copy"></i></button>
    </figure>
    <hr>
    <h4 id="contextual-variations">Contextual variations</h4>
    <p class="mb-3">Add any of the below mentioned modifier classes to change the appearance of a badge.</p>
    <div class="example">
      <span class="badge badge-primary">Primary</span>
      <span class="badge badge-secondary">Secondary</span>
      <span class="badge badge-success">Success</span>
      <span class="badge badge-danger">Danger</span>
      <span class="badge badge-warning">Warning</span>
      <span class="badge badge-info">Info</span>
      <span class="badge badge-light">Light</span>
      <span class="badge badge-dark">Dark</span>
    </div>
    <figure class="highlight" id="contextualVariations">
<pre><code class="language-markup"><script type="script/prism-html-markup"><span class="badge badge-primary">Primary</span>
<span class="badge badge-secondary">Secondary</span>
<span class="badge badge-success">Success</span>
<span class="badge badge-danger">Danger</span>
<span class="badge badge-warning">Warning</span>
<span class="badge badge-info">Info</span>
<span class="badge badge-light">Light</span>
<span class="badge badge-dark">Dark</span></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#contextualVariations"><i data-feather="copy"></i></button>
    </figure>
    <hr>
    <h4 id="pill-badges">Pill badges</h4>
    <p class="mb-3">Use the <code>.badge-pill</code> modifier class to make badges more rounded (with a larger border-radius and additional horizontal padding).</p>
    <div class="example">
      <span class="badge badge-pill badge-primary">Primary</span>
      <span class="badge badge-pill badge-secondary">Secondary</span>
      <span class="badge badge-pill badge-success">Success</span>
      <span class="badge badge-pill badge-danger">Danger</span>
      <span class="badge badge-pill badge-warning">Warning</span>
      <span class="badge badge-pill badge-info">Info</span>
      <span class="badge badge-pill badge-light">Light</span>
      <span class="badge badge-pill badge-dark">Dark</span>
    </div>
    <figure class="highlight" id="pillBadges">
<pre><code class="language-markup"><script type="script/prism-html-markup"><span class="badge badge-pill badge-primary">Primary</span></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#pillBadges"><i data-feather="copy"></i></button>
    </figure>
    <hr>
    <h4 id="link-badges">Link badges</h4>
    <p class="mb-3">Using the contextual <code>.badge-*</code> classes on an <code>&lt;a&gt;</code> element quickly provide actionable badges with hover and focus states.</p>
    <div class="example">
      <a href="#" class="badge badge-primary">Primary</a>
      <a href="#" class="badge badge-secondary">Secondary</a>
      <a href="#" class="badge badge-success">Success</a>
      <a href="#" class="badge badge-danger">Danger</a>
      <a href="#" class="badge badge-warning">Warning</a>
      <a href="#" class="badge badge-info">Info</a>
      <a href="#" class="badge badge-light">Light</a>
      <a href="#" class="badge badge-dark">Dark</a>
    </div>
    <figure class="highlight" id="linkBadges">
<pre><code class="language-markup"><script type="script/prism-html-markup"><a href="#" class="badge badge-primary">Primary</a></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#linkBadges"><i data-feather="copy"></i></button>
    </figure>
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Default badges</a>
      </li>
      <li class="nav-item">
        <a href="#contextual-variations" class="nav-link">Contextual variations</a>
      </li>
      <li class="nav-item">
        <a href="#pill-badges" class="nav-link">Pill badges</a>
      </li>
      <li class="nav-item">
        <a href="#link-badges" class="nav-link">Link badges</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush