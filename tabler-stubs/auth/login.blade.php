<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ config('app.name') }}</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="d-flex flex-column">
    <div class="page page-center">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <a href="{{ url('/') }}" class="navbar-brand navbar-brand-autodark">{{ config('app.name') }}</a>
        </div>

        @if(!empty($errors))
            @if($errors->any())
                @foreach($errors->all() as $error)
                  <div class="card mb-2">
                    <div class="card-status-top bg-danger"></div>
                    <div class="card-body">
                      <p>{{ $error }}</p>
                    </div>
                  </div>
                @endforeach
            @endif
        @endif

        <form class="card card-md" action="{{ route('login') }}" method="POST" autocomplete="off">
          @csrf

          <div class="card-body">
            <h2 class="card-title text-center mb-4">{{ __('auth.login.title') }}</h2>
            <div class="mb-3">
              <label class="form-label">{{ __('auth.email') }}</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('auth.email') }}" autocomplete="off" value="{{ old('email') }}">

              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-2">
              <label class="form-label">
                {{ __('Password') }}
              </label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}"  autocomplete="off">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                  </a>
                </span>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="mb-2">
              <label class="form-check">
                <input type="checkbox"  name="remember" class="form-check-input"/>
                <span class="form-check-label">{{ __('auth.remember_me') }}</span>
              </label>
            </div>

            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">{{ __('auth.sign_in') }}</button>
            </div>
          </div>
        </form>
        <div class="text-center text-muted mt-3">
          {{ __('auth.registration.title') }} <a href="{{ route('register') }}" tabindex="-1">{{ __('auth.sign_in') }}</a>
        </div>
        <div class="text-center text-muted mt-3">
          {{ __('auth.login.forgot_password') }} <a href="{{ route('password.request') }}" tabindex="-1">{{ __('auth.reset_password.reset_pwd_btn') }}</a>
        </div>
      </div>
    </div>
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
