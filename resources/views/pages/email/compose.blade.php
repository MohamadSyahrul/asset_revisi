@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/simplemde/simplemde.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row inbox-wrapper">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-3 email-aside border-lg-right">
            <div class="aside-content">
              <div class="aside-header">
                <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button">
                  <span class="icon"><i data-feather="chevron-down"></i></span>
                </button>
                <span class="title text-muted font-weight-bold">Mail Service</span>
                <p class="text-muted">amiahburton@gmail.com</p>
              </div>
              <div class="aside-compose"><a class="btn btn-primary btn-block" href="{{ url('/email/compose') }}">Compose Email</a></div>
              <div class="aside-nav collapse">
                <ul class="nav">
                  <li><a href="{{ url('/email/inbox') }}"><span class="icon"><i data-feather="inbox"></i></span>Inbox<span class="badge badge-danger-muted text-white font-weight-bold float-right">2</span></a></li>
                  <li class="active"><a href="#"><span class="icon"><i data-feather="mail"></i></span>Sent Mail</a></li>
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
            <div class="email-head">
              <div class="email-head-title d-flex align-items-center">
                <span data-feather="edit" class="icon-md mr-2"></span>
                New message
              </div>
            </div>
            <div class="email-compose-fields">
              <div class="to">
                <div class="form-group row py-0">
                  <label class="col-md-1 control-label">To:</label>
                  <div class="col-md-11">
                      <div class="form-group">
                        <select class="compose-multiple-select form-control w-100" multiple="multiple">
                          <option value="AL">Alabama</option>
                          <option value="WY">Wyoming</option>
                          <option value="AM">America</option>
                          <option value="CA">Canada</option>
                          <option value="RU">Russia</option>
                        </select>
                      </div>
                  </div>
                </div>
              </div>
              <div class="to cc">
                <div class="form-group row pt-1 pb-3">
                  <label class="col-md-1 control-label">Cc</label>
                  <div class="col-md-11">
                    <select class="compose-multiple-select form-control w-100" multiple="multiple">
                      <option value="Alabama">Alabama</option>
                      <option value="Alaska" selected="selected">Alaska</option>
                      <option value="Melbourne">Melbourne</option>
                      <option value="Victoria" selected="selected">Victoria</option>
                      <option value="Newyork">Newyork</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="subject">
                <div class="form-group row py-0">
                  <label class="col-md-1 control-label">Subject</label>
                  <div class="col-md-11">
                    <input class="form-control" type="text">
                  </div>
                </div>
              </div>
            </div>
            <div class="email editor">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label sr-only" for="simpleMdeEditor">Descriptions </label>
                  <textarea class="form-control" name="tinymce" id="simpleMdeEditor" rows="5"></textarea>
                </div>
              </div>
              <div class="email action-send">
                <div class="col-md-12">
                  <div class="form-group mb-0">
                    <button class="btn btn-primary btn-space" type="submit"><i class="icon s7-mail"></i> Send</button>
                    <button class="btn btn-secondary btn-space" type="button"><i class="icon s7-close"></i> Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/simplemde/simplemde.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/email.js') }}"></script>
@endpush