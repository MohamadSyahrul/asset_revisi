@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Forms</a></li>
    <li class="breadcrumb-item active" aria-current="page">Advanced Elements</li>
  </ol>
</nav>

<div class="row">
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Validation</h4>
        <p class="card-description">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p>
        <form class="cmxform" id="signupForm" method="get" action="#">
          <fieldset>
            <div class="form-group">
              <label for="name">Name</label>
              <input id="name" class="form-control" name="name" type="text">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" class="form-control" name="email" type="email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" class="form-control" name="password" type="password">
            </div>
            <div class="form-group">
              <label for="confirm_password">Confirm password</label>
              <input id="confirm_password" class="form-control" name="confirm_password" type="password">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Bootstrap MaxLength</h4>
        <p class="card-description">Read the <a href="https://github.com/mimo84/bootstrap-maxlength" target="_blank"> Official Bootstrap MaxLength Documentation </a>for a full list of instructions and other options.</p>
        <div class="form-group row">
          <div class="col-lg-3">
            <label class="col-form-label">Default usage</label>
          </div>
          <div class="col-lg-8">
            <input class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" type="text" placeholder="Type Something..">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-3">
            <label class="col-form-label">Few options</label>
          </div>
          <div class="col-lg-8">
            <input class="form-control" maxlength="20" name="defaultconfig-2" id="defaultconfig-2" type="text" placeholder="Type Something..">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-3">
            <label class="col-form-label">All the options</label>
          </div>
          <div class="col-lg-8">
            <input class="form-control" maxlength="10" name="defaultconfig-3" id="defaultconfig-3" type="text" placeholder="Type Something..">
          </div>
        </div>
        <div class="form-group mb-0 row">
          <div class="col-lg-3">
            <label class="col-form-label">Text Area</label>
          </div>
          <div class="col-lg-8">
            <textarea id="maxlength-textarea" class="form-control" maxlength="100" rows="8" placeholder="This textarea has a limit of 100 chars."></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Input Mask</h6>
        <p class="card-description">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p>
        <form class="forms-sample">
          <div class="form-group row">
            <div class="col">
              <label>Date:</label>
              <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"/>
            </div>
            <div class="col-md-6">
              <label>Time (12 hour):</label>
              <input class="form-control" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="hh:mm tt" />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label>Date time:</label>
              <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy HH:MM:ss" />
            </div>
            <div class="col-md-6">
              <label>Date with custom placeholder:</label>
              <input class="form-control" data-inputmask="'alias': 'datetime'" data-inputmask-placeholder="*" data-inputmask-inputformat="dd/mm/yyyy" />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label>Phone:</label>
              <input class="form-control mb-4 mb-md-0" data-inputmask-alias="(+99) 9999-9999"/>
            </div>
            <div class="col-md-6">
              <label>Credit card:</label>
              <input class="form-control" data-inputmask-alias="9999-9999-9999-9999"/>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label>Currency:</label>
              <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'currency'"/>
            </div>
            <div class="col-md-6">
              <label>Serial key:</label>
              <input class="form-control" data-inputmask-alias="****-****-****-****"/>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label>Email:</label>
              <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'email'"/>
            </div>
            <div class="col-md-6">
              <label>Ip address:</label>
              <input class="form-control" data-inputmask="'alias': 'ip'"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Select 2</h4>
        <p class="card-description">Read the <a href="https://select2.org/" target="_blank"> Official Select2 Documentation </a>for a full list of instructions and other options.</p>
        <div class="form-group">
          <label>Single select box using select 2</label>
          <select class="js-example-basic-single w-100">
            <option value="TX">Texas</option>
            <option value="NY">New York</option>
            <option value="FL">Florida</option>
            <option value="KN">Kansas</option>
            <option value="HW">Hawaii</option>
          </select>
        </div>
        <div class="form-group">
          <label>Multiple select using select 2</label>
          <select class="js-example-basic-multiple w-100" multiple="multiple">
            <option value="TX">Texas</option>
            <option value="WY">Wyoming</option>
            <option value="NY">New York</option>
            <option value="FL">Florida</option>
            <option value="KN">Kansas</option>
            <option value="HW">Hawaii</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Typeahead</h4>
        <p class="card-description">Read the <a href="https://github.com/twitter/typeahead.js" target="_blank"> Official Typeahead.js Documentation </a>for a full list of instructions and other options.</p>
        <div class="form-group row pt-0">
          <div class="col">
            <label>Basic</label>
            <div id="the-basics">
              <input class="typeahead" type="text" placeholder="States of USA">
            </div>
          </div>
          <div class="col">
            <label>Bloodhound</label>
            <div id="bloodhound">
              <input class="typeahead" type="text" placeholder="States of USA">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Tags input</h6>
        <p class="card-description">Read the <a href="https://www.npmjs.com/package/jquery-tags-input" target="_blank"> Official jQuery-tags-input Documentation </a>for a full list of instructions and other options.</p>
        <p class="mb-2">Type something to add a new tag</p>
        <div>
          <input name="tags" id="tags" value="New York,Texas,Florida,New Mexico" />
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Bootstrap color picker</h6>
        <p class="card-description">Read the <a href="https://farbelous.io/bootstrap-colorpicker/" target="_blank"> Official Bootstrap-colorpicker Documentation </a>for a full list of instructions and other options.</p>
        <div id="cp1" class="input-group mb-2" title="Using input value">
          <input type="text" class="form-control input-lg" value="#DD0F20FF"/>
          <span class="input-group-append">
            <span class="input-group-text colorpicker-input-addon"><i></i></span>
          </span>
        </div>
        <div id="cp2" class="input-group mb-2" data-color="rgb(241, 138, 49)"
              title="Using data-color attribute in the colorpicker element">
          <input type="text" class="form-control input-lg"/>
          <span class="input-group-append">
            <span class="input-group-text colorpicker-input-addon"><i></i></span>
          </span>
        </div>
        <div id="cp3" class="input-group" title="Using data-color attribute in the input">
          <input type="text" class="form-control input-lg" data-color="hsl(56, 93%, 63%)"/>
          <span class="input-group-append">
            <span class="input-group-text colorpicker-input-addon"><i></i></span>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Date picker</h6>
        <p class="card-description">Read the <a href="https://bootstrap-datepicker.readthedocs.io/en/latest/" target="_blank"> Official Bootstrap-datepicker Documentation </a>for a full list of instructions and other options.</p>
        <div class="input-group date datepicker" id="datePickerExample">
          <input type="text" class="form-control"><span class="input-group-addon"><i data-feather="calendar"></i></span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Time picker</h6>
        <p class="card-description">Read the <a href="https://tempusdominus.github.io/bootstrap-4/" target="_blank"> Official Tempus Dominus Documentation </a>for a full list of instructions and other options.</p>
        <div class="input-group date timepicker" id="datetimepickerExample" data-target-input="nearest">
          <input type="text" class="form-control datetimepicker-input" data-target="#datetimepickerExample"/>
          <div class="input-group-append" data-target="#datetimepickerExample" data-toggle="datetimepicker">
            <div class="input-group-text"><i data-feather="clock"></i></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Dropzone</h6>
        <p class="card-description">Read the <a href="https://www.dropzonejs.com/" target="_blank"> Official Dropzone.js Documentation </a>for a full list of instructions and other options.</p>
        <form action="/file-upload" class="dropzone" id="exampleDropzone"></form>
      </div>
    </div>
  </div>
  <div class="col-md-6 stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Dropify</h6>
        <p class="card-description">Read the <a href="https://github.com/JeremyFagis/dropify" target="_blank"> Official Dropify Documentation </a>for a full list of instructions and other options.</p>
        <input type="file" id="myDropify" class="border"/>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/typeahead-js/typeahead.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/dropzone/dropzone.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/form-validation.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-maxlength.js') }}"></script>
  <script src="{{ asset('assets/js/inputmask.js') }}"></script>
  <script src="{{ asset('assets/js/select2.js') }}"></script>
  <script src="{{ asset('assets/js/typeahead.js') }}"></script>
  <script src="{{ asset('assets/js/tags-input.js') }}"></script>
  <script src="{{ asset('assets/js/dropzone.js') }}"></script>
  <script src="{{ asset('assets/js/dropify.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-colorpicker.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/timepicker.js') }}"></script>
@endpush