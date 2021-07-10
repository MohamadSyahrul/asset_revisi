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
                  <li class="active"><a href="{{ url('/email/inbox') }}"><span class="icon"><i data-feather="inbox"></i></span>Inbox<span class="badge badge-danger-muted text-white font-weight-bold float-right">2</span></a></li>
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
                  <li class="active"><a href="#">
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
              <div class="email-head-subject">
                <div class="title d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">
                    <a class="active" href="#"><span class="icon"><i data-feather="star" class="text-primary-muted"></i></span></a> 
                    <span>New Project</span>
                  </div>
                  <div class="icons">
                    <a href="#" class="icon"><i data-feather="share" class="text-muted hover-primary-muted" data-toggle="tooltip" title="Forward"></i></a>
                    <a href="#" class="icon"><i data-feather="printer" class="text-muted" data-toggle="tooltip" title="Print"></i></a>
                    <a href="#" class="icon"><i data-feather="trash" class="text-muted" data-toggle="tooltip" title="Delete"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="email-head-sender d-flex align-items-center justify-content-between flex-wrap">
                <div class="d-flex align-items-center">
                  <div class="avatar">
                    <img src="{{ url('https://via.placeholder.com/36x36') }}" alt="Avatar" class="rounded-circle user-avatar-md">
                  </div>
                  <div class="sender d-flex align-items-center">
                    <a href="#">John Doe</a> <span>to</span><a href="#">me</a>
                    <div class="actions dropdown">
                      <a class="icon" href="#" data-toggle="dropdown"><i data-feather="chevron-down"></i></a>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="#">Mark as read</a>
                        <a class="dropdown-item" href="#">Mark as unread</a>
                        <a class="dropdown-item" href="#">Spam</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="date">Nov 20, 11:20</div>
              </div>
            </div>
            <div class="email-body">
              <p>Hello,</p>
              <br>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
              <br>
              <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
              <br>
              <p><strong>Regards</strong>,<br> John Doe</p>
            </div>
            <div class="email-attachments">
              <div class="title">Attachments <span>(3 files, 12,44 KB)</span></div>
              <ul>
                <li><a href="#"><span data-feather="file"></span> Reference.zip <span class="text-muted tx-11">(5.10 MB)</span></a></li>
                <li><a href="#"><span data-feather="file"></span> Instructions.zip <span class="text-muted tx-11">(3.15 MB)</span></a></li>
                <li><a href="#"><span data-feather="file"></span> Team-list.pdf <span class="text-muted tx-11">(4.5 MB)</span></a></li>
              </ul>
            </div>
          </div>
        </div>
          
      </div>
    </div>
  </div>
</div>
@endsection