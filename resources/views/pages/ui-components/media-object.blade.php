@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
  <div class="col-xl-10 main-content pl-xl-4 pr-xl-5">
    <h1 class="page-title">Media Object</h1>
    <p class="lead">Construct highly repetitive components like blog comments, tweets, and the like. Read the <a href="https://getbootstrap.com/docs/4.3/components/media-object/" target="_blank">Official Bootstrap Documentation</a> for a full list of instructions and other options.</p>
    
    <hr>
    
    <h4 id="default">Basic example</h4>
    <p class="mb-3">The media object helps build complex and repetitive components where some media is positioned alongside content that doesn’t wrap around said media. Plus, it does this with only two required classes thanks to flexbox.</p>
    <div class="example">
      <div class="media d-block d-sm-flex">
        <img src="{{ url('assets/images/placeholder.jpg') }}" class="wd-100p wd-sm-200 mb-3 mb-sm-0 mr-3" alt="...">
        <div class="media-body">
          <h5 class="mt-0">Media heading</h5>
          <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        </div>
      </div>
    </div>
    <figure class="highlight" id="Default">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="media d-block d-sm-flex">
  <img src="..." class="wd-100p wd-sm-200 mb-3 mb-sm-0 mr-3" alt="...">
  <div class="media-body">
    <h5 class="mt-0">Media heading</h5>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Default"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="nesting">Nesting</h4>
    <p class="mb-3">Media objects can be infinitely nested, though we suggest you stop at some point. Place nested <code>.media</code> within the <code>.media-body</code> of a parent media object.</p>
    <div class="example">
      <div class="media d-block d-sm-flex">
        <img src="{{ url('assets/images/placeholder.jpg') }}" class="wd-100p wd-sm-150 mb-3 mb-sm-0 mr-3" alt="...">
        <div class="media-body">
          <h5 class="mt-0">Media heading</h5>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      
          <div class="media d-block d-sm-flex mt-3">
            <a class="mr-3" href="#">
              <img src="{{ url('assets/images/placeholder.jpg') }}" class="wd-100p wd-sm-150 mb-3 mb-sm-0 mr-3" alt="...">
            </a>
            <div class="media-body">
              <h5 class="mt-0">Media heading</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>
        </div>
      </div>
    </div>
    <figure class="highlight" id="Nesting">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="media d-block d-sm-flex">
  <img src="..." class="wd-100p wd-sm-150 mb-3 mb-sm-0 mr-3" alt="...">
  <div class="media-body">
    <h5 class="mt-0">Media heading</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

    <div class="media d-block d-sm-flex mt-3">
      <a class="mr-3" href="#">
        <img src="..." class="wd-100p wd-sm-150 mb-3 mb-sm-0 mr-3" alt="...">
      </a>
      <div class="media-body">
        <h5 class="mt-0">Media heading</h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Nesting"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>
    
    <h4 id="alignment">Alignment</h4>
    <p class="mb-3">Media in a media object can be aligned with flexbox utilities to the top (default), middle, or end of your <code>.media-body</code> content.</p>
    <div class="example">
      <div class="media d-block d-sm-flex">
        <img src="{{ url('assets/images/placeholder.jpg') }}" class="wd-100p mb-3 mb-sm-0 align-self-start mr-3 wd-sm-150" alt="...">
        <div class="media-body">
          <h5 class="mt-0">Top-aligned media</h5>
          <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
          <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>
    </div>
    <figure class="highlight" id="Alignment">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="media d-block d-sm-flex">
  <img src="..." class="wd-100p mb-3 mb-sm-0 align-self-start mr-3 wd-sm-150" alt="...">
  <div class="media-body">
    <h5 class="mt-0">Top-aligned media</h5>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Alignment"><i data-feather="copy"></i></button>
    </figure>
    
    <div class="example">
      <div class="media d-block d-sm-flex">
        <img src="{{ url('assets/images/placeholder.jpg') }}" class="align-self-center wd-100p wd-sm-150 mb-3 mb-sm-0 mr-3" alt="...">
        <div class="media-body">
          <h5 class="mt-0">Center-aligned media</h5>
          <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
          <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>
    </div>
    <figure class="highlight" id="centerAlign">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="media d-block d-sm-flex">
  <img src="..." class="align-self-center wd-100p wd-sm-150 mb-3 mb-sm-0 mr-3" alt="...">
  <div class="media-body">
    ...
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#centerAlign"><i data-feather="copy"></i></button>
    </figure>
    
    <div class="example">
      <div class="media d-block d-sm-flex">
        <img src="{{ url('assets/images/placeholder.jpg') }}" class="align-self-end wd-100p wd-sm-150 mb-3 mb-sm-0 mr-3" alt="...">
        <div class="media-body">
          <h5 class="mt-0">Bottom-aligned media</h5>
          <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
          <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>
    </div>
    <figure class="highlight" id="bottomAlign">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="media d-block d-sm-flex">
  <img src="..." class="align-self-end wd-100p wd-sm-150 mb-3 mb-sm-0 mr-3" alt="...">
  <div class="media-body">
    ...
  </div>
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#bottomAlign"><i data-feather="copy"></i></button>
    </figure>

    <hr>
    
    <h4 id="order">Order</h4>
    <p class="mb-3">Change the order of content in media objects by modifying the HTML itself, or by adding some custom flexbox CSS to set the <code>order</code> property (to an integer of your choosing).</p>
    <div class="example">
      <div class="media d-block d-sm-flex">
        <div class="media-body">
          <h5 class="mt-0 mb-1">Media object</h5>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
        <img src="{{ url('assets/images/placeholder.jpg') }}" class="wd-100p wd-sm-150 mb-3 mb-sm-0 ml-3" alt="...">
      </div>
    </div>
    <figure class="highlight" id="Order">
<pre><code class="language-markup"><script type="script/prism-html-markup"><div class="media d-block d-sm-flex">
  <div class="media-body">
    <h5 class="mt-0 mb-1">Media object</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
  <img src="..." class="wd-100p wd-sm-150 mb-3 mb-sm-0 ml-3" alt="...">
</div></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#Order"><i data-feather="copy"></i></button>
    </figure>
    
    <hr>

    <h4 id="media-list">Media list</h4>
    <p class="mb-3">Because the media object has so few structural requirements, you can also use these classes on list HTML elements. On your <code>&lt;ul&gt;</code> or <code>&lt;ol&gt;</code>, add the <code>.list-unstyled</code> to remove any browser default list styles, and then apply <code>.media</code> to your <code>&lt;li&gt;</code>s. As always, use spacing utilities wherever needed to fine tune.</p>
    <div class="example">
      <ul class="list-unstyled">
        <li class="media d-block d-sm-flex">
          <img src="{{ url('assets/images/placeholder.jpg') }}" class="wd-100p wd-sm-150 mb-3 mb-sm-0 mr-3" alt="...">
          <div class="media-body">
            <h5 class="mt-0 mb-1">List-based media object</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </li>
        <li class="media d-block d-sm-flex my-4">
          <img src="{{ url('assets/images/placeholder.jpg') }}" class="wd-100p wd-sm-150 mb-3 mb-sm-0 mr-3" alt="...">
          <div class="media-body">
            <h5 class="mt-0 mb-1">List-based media object</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </li>
        <li class="media d-block d-sm-flex">
          <img src="{{ url('assets/images/placeholder.jpg') }}" class="wd-100p wd-sm-150 mb-3 mb-sm-0 mr-3" alt="...">
          <div class="media-body">
            <h5 class="mt-0 mb-1">List-based media object</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </li>
      </ul>
    </div>
    <figure class="highlight" id="mediaList">
<pre><code class="language-markup"><script type="script/prism-html-markup"><ul class="list-unstyled">
  <li class="media d-block d-sm-flex">
    <img src="..." class="wd-100p wd-sm-150 mb-3 mb-sm-0 mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">List-based media object</h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li>
  <li class="media d-block d-sm-flex my-4">
    ...
  </li>
  <li class="media d-block d-sm-flex">
    ...
  </li>
</ul></script></code></pre>
      <button type="button" class="btn btn-clipboard" data-clipboard-target="#mediaList"><i data-feather="copy"></i></button>
    </figure>
                
  </div>
  <div class="col-xl-2 content-nav-wrapper">
    <ul class="nav content-nav d-flex flex-column">
      <li class="nav-item">
        <a href="#default" class="nav-link">Basic example</a>
      </li>
      <li class="nav-item">
        <a href="#nesting" class="nav-link">Nesting</a>
      </li>
      <li class="nav-item">
        <a href="#alignment" class="nav-link">Alignment</a>
      </li>
      <li class="nav-item">
        <a href="#order" class="nav-link">Order</a>
      </li>
      <li class="nav-item">
        <a href="#media-list" class="nav-link">Media list</a>
      </li>
    </ul>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush