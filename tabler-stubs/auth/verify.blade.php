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

        @if (session('resent'))
          <div class="card card-active mb-2">
            <div class="card-body">
              <p>A fresh verification link has been sent to your email address</p>
            </div>
          </div>
        @endif

        <div class="card card-md">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Verify</h2>
            <p>Before proceeding, please check your email for a verification link.If you did not receive
                        the email,
                <a href="#"
                   onclick="event.preventDefault(); document.getElementById('resend-form').submit();">
                    click here to request another.
                </a>
            </p>
            <form id="resend-form" action="{{ route('verification.resend') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>
        </div>
      </div>
    </div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
