@extends('layout.master')

@section('content')
<div class="row inbox-wrapper">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-3 email-aside border-lg-right">
            <div class="aside-content">
              <div class="aside-header">
                <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button"><span class="icon"><i data-feather="chevron-down"></i></span></button><span class="title">Mail Service</span>
                <p class="description">amiahburton@gmail.com</p>
              </div>
              <div class="aside-compose"><a class="btn btn-primary btn-block" href="{{ url('/email/compose') }}">Compose Email</a></div>
              <div class="aside-nav collapse">
                <ul class="nav">
                  <li class="active"><a href="#"><span class="icon"><i data-feather="inbox"></i></span>Inbox<span class="badge badge-danger-muted text-white font-weight-bold float-right">2</span></a></li>
                  <li><a href="#"><span class="icon"><i data-feather="mail"></i></span>Sent Mail</a></li>
                  <li><a href="#"><span class="icon"><i data-feather="briefcase"></i></span>Important<span class="badge badge-info-muted text-white font-weight-bold float-right">4</span></a></li>
                  <li><a href="#"><span class="icon"><i data-feather="file"></i></span>Drafts</a></li>
                  <li><a href="#"><span class="icon"><i data-feather="star"></i></span>Tags</a></li>
                  <li><a href="#"><span class="icon"><i data-feather="trash"></i></span>Trash</a></li>
                </ul>
                <span class="title">Labels</span>
                <ul class="nav nav-pills nav-stacked">
                  <li>
                    <a href="#"><i data-feather="tag" class="text-warning"></i> Important </a>
                  </li>
                  <li><a href="#">
                    <i data-feather="tag" class="text-primary"></i> Business </a>
                  </li>
                  <li>
                    <a href="#"> <i data-feather="tag" class="text-info"></i> Inspiration </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-9 email-content">
            <div class="email-inbox-header">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="email-title mb-2 mb-md-0"><span class="icon"><i data-feather="inbox"></i></span> Inbox <span class="new-messages">(2 new messages)</span> </div>
                </div>
                <div class="col-lg-6">
                  <div class="email-search">
                    <div class="input-group input-search">
                      <input class="form-control" type="text" placeholder="Search mail..."><span class="input-group-btn">
                      <button class="btn btn-outline-secondary" type="button"><i data-feather="search"></i></button></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="email-filters d-flex align-items-center justify-content-between flex-wrap">
              <div class="email-filters-left flex-wrap d-none d-md-flex">
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                  </label>
                </div>
                <div class="btn-group ml-3">
                  <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" type="button"> With selected <span class="caret"></span></button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="#">Mark as read</a>
                    <a class="dropdown-item" href="#">Mark as unread</a><a class="dropdown-item" href="#">Spam</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#">Delete</a>
                  </div>
                </div>
                <div class="btn-group mb-1 mb-md-0">
                  <button class="btn btn-outline-primary" type="button">Archive</button>
                  <button class="btn btn-outline-primary" type="button">Span</button>
                  <button class="btn btn-outline-primary" type="button">Delete</button>
                </div>
                <div class="btn-group mb-1 mb-md-0 d-none d-xl-block">
                  <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" type="button">Order by <span class="caret"></span></button>
                  <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <a class="dropdown-item" href="#">Date</a>
                    <a class="dropdown-item" href="#">From</a>
                    <a class="dropdown-item" href="#">Subject</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Size</a>
                  </div>
                </div>
              </div>
              <div class="email-filters-right"><span class="email-pagination-indicator">1-50 of 253</span>
                <div class="btn-group email-pagination-nav">
                  <button class="btn btn-outline-secondary btn-icon" type="button"><i data-feather="chevron-left"></i></button>
                  <button class="btn btn-outline-secondary btn-icon" type="button"><i data-feather="chevron-right"></i></button>
                </div>
              </div>
            </div>
            <div class="email-list">
              <div class="email-list-item email-list-item--unread">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="{{ url('/email/read') }}" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    <span class="icon"><i data-feather="paperclip"></i> </span>
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item email-list-item--unread">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="{{ url('/email/read') }}" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    <span class="icon"><i data-feather="paperclip"></i> </span>
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite active" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="{{ url('/email/read') }}" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite active" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="{{ url('/email/read') }}" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    <span class="icon"><i data-feather="paperclip"></i> </span>
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="{{ url('/email/read') }}" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="{{ url('/email/read') }}" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="{{ url('/email/read') }}" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    <span class="icon"><i data-feather="paperclip"></i> </span>
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite active" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="{{ url('/email/read') }}" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    <span class="icon"><i data-feather="paperclip"></i> </span>
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="{{ url('/email/read') }}" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="{{ url('/email/read') }}" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="{{ url('/email/read') }}" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    <span class="icon"><i data-feather="paperclip"></i> </span>
                    28 Jul
                  </span>
                </a>
              </div>
              <div class="email-list-item">
                <div class="email-list-actions">
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                  <a class="favorite" href="#"><span><i data-feather="star"></i></span></a>
                </div>
                <a href="{{ url('/email/read') }}" class="email-list-detail">
                  <div>
                    <span class="from">Penelope Thornton</span>
                    <p class="msg">Urgent - You forgot your keys in the class room, please come imediatly!</p>
                  </div>
                  <span class="date">
                    <span class="icon"><i data-feather="paperclip"></i> </span>
                    28 Jul
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
@endsection