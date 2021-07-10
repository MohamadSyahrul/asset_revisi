@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content pl-xl-4 pr-xl-5">
    <h1 class="page-title">Breadcrumbs</h1>
    <p class="lead">Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS. Read the <a href="https://getbootstrap.com/docs/4.3/components/breadcrumb/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
    <hr>
    <h4 id="default">Defalult breadcrumb</h4>
    <div class="example">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </div>
    <figure class="highlight" id="defaultBreadcrumbs">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#defaultBreadcrumbs"><i data-feather="copy"></i></button>
    </figure>
    <hr>
    <h4 id="variations">Breadcrumb variations</h4>
    <p class="mb-3">Add class <code>.bg-*</code> for solid colored breadcrumb.</p>
    <div class="example">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-primary">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-info">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-danger">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-success">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-warning">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </div>
    <figure class="highlight" id="colorVariations">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-primary">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#colorVariations"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="inverse">Inverse breadcrumbs</h4>
    <p class="mb-3">Add class <code>.bg-inverse-*</code> for inverse skin.</p>
    <div class="example">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-primary">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-info">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-danger">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-success">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-warning">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-dark">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </div>
    <figure class="highlight" id="inverseBreadcrumbs">
<pre><code class="language-markup"><script type="script/prism-html-markup"><nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-inverse-primary">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#inverseBreadcrumbs"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="changing-seperator">Changing the separator</h4>
    <p class="mb-3">Separators are automatically added in CSS through <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/::before"><code>::before</code></a> and <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/content"><code>content</code></a>. They can be changed by changing <code>$breadcrumb-divider</code>. The <a href="https://sass-lang.com/documentation/Sass/Script/Functions.html#quote-instance_method">quote</a> function is needed to generate the quotes around a string, so if you want <code>&gt;</code> as separator, you can use this:</p>
    <figure class="highlight" id="divider">
<pre><code class="language-css"><script type="script/prism-html-markup">$breadcrumb-divider: quote(">");</script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#divider"><i data-feather="copy"></i></button>
    </figure>
    <p class="mb-3">It’s also possible to use a base64 embedded SVG icon:</p>
    <figure class="highlight" id="base64">
<pre><code class="language-css"><script type="script/prism-html-markup">$breadcrumb-divider: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4IiBoZWlnaHQ9IjgiPjxwYXRoIGQ9Ik0yLjUgMEwxIDEuNSAzLjUgNCAxIDYuNSAyLjUgOGw0LTQtNC00eiIgZmlsbD0iY3VycmVudENvbG9yIi8+PC9zdmc+);</script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#base64"><i data-feather="copy"></i></button>
    </figure>
    <p class="mb-3">The separator can be removed by setting <code>$breadcrumb-divider</code> to <code>none</code>:</p>
    <figure class="highlight" id="seperatorNone">
<pre><code class="language-markup"><script type="script/prism-html-markup">$breadcrumb-divider: none;</script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#seperatorNone"><i data-feather="copy"></i></button>
    </figure>
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Default breadcrumb</a>
      </li>
      <li class="nav-item">
        <a href="#variations" class="nav-link">Breadcrumb variations</a>
      </li>
      <li class="nav-item">
        <a href="#inverse" class="nav-link">Inverse breadcrumb</a>
      </li>
      <li class="nav-item">
        <a href="#changing-seperator" class="nav-link">Changing seperator</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush