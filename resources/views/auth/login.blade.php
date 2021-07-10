@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

    <div class="row w-100 mx-0 auth-page">
      <div class="col-md-8 col-xl-6 mx-auto">
        <div class="card">
          <div class="row">
            <div class="col-md-4 pr-md-0">
              <div class="auth-left-wrapper" style="background-image: url({{ url('https://via.placeholder.com/219x452') }})">
  
              </div>
            </div>
            <div class="col-md-8 pl-md-0">
              <div class="auth-form-wrapper px-4 py-5">
                <a href="#" class="noble-ui-logo d-block mb-2">Sim<span class="text-danger">Aset</span></a>
                <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
                <form method="POST" class="forms-sample" action="{{ route('login') }}">
                    @csrf
                
                    <div class="form-group row">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                
                    <div class="form-group row">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                
                    {{-- <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div> --}}

                    <div class="form-check form-check-flat form-check-danger">
                        <label class="form-check-label" for="remember">
                          <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                          {{ __('Remember Me') }}
                        </label>
                      </div>
                
                        <div class="mt-3">
                            <button type="submit" class="btn btn-danger mr-2 mb-2 mb-md-0">
                                {{ __('Login') }}
                            </button>
                            <a href="{{ route('tracking') }}" class="btn btn-link text-danger float-right"> Tracking Aset
                              <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
@endsection
