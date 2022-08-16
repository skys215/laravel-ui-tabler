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

        @if (session('status'))
          <div class="card card-active mb-2">
            <div class="card-body">
              <p>{{ session('status') }}</p>
            </div>
          </div>
        @endif

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

        <form class="card card-md" action="{{ route('password.email') }}" method="POST" autocomplete="off">
          @csrf

          <div class="card-body">
            <h2 class="card-title text-center mb-4">Send Password Reset Link</h2>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" autocomplete="off" value="{{ old('email') }}">

              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Send Password Reset Link</button>
            </div>
          </div>
        </form>
        <div class="text-center text-muted mt-3">
          Don't have account yet? <a href="{{ route('register') }}" tabindex="-1">Sign up</a>
        </div>
        <div class="text-center text-muted mt-3">
          Already has an account? <a href="{{ route('login') }}" tabindex="-1">Login</a>
        </div>
      </div>
    </div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
