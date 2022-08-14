<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="main" class="grd">
        <div class="header grd-row txt--center my2">
            <div class="grd-row-col-6">
                <h1>{{ config('app.name') }}</h1>
            </div>
        </div>
        <div class="content grd-row">
            <div class="grd-row-col-2-6 center-box">
                <p>Login</p>

                @error('email')
                <aside class="fnt--white bg--red p1 my1">
                    <p><strong>ERROR</strong>: {{ $message }}</p>
                </aside>
                @enderror
                @error('password')
                <aside class="fnt--white bg--red p1 my1">
                    <p><strong>ERROR</strong>: {{ $message }}</p>
                </aside>
                @enderror

                <form action="{{ route('login') }}" method="POST" role="form" class="p2 brdr--mid-gray">
                    @csrf
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">

                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" value="">

                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember" class="pure-checkbox">Remember me</label>

                    <p class="txt--center">
                        <button type="submit" class="btn--blue">Sign in</button>
                    </p>

                    <p class="txt--center">
                        <a href="{{ route('password.request') }}">Forgot your password?</a>
                        <a href="{{ route('register') }}">Register</a>
                    </p>
                </form>
            </div>
        </div>

        <div class="footer grd-row">
            <div class="grd-row-col-6 txt--center">
                <p>Copyright &copy; 2022 <a href="{{ url('/') }}">{{ config('app.name') }}</a>. All rights reserved.</p>
            </div>
        </div>
    </div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
