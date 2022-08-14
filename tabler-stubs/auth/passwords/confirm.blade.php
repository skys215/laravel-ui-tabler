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

                <p>Please confirm your password before continuing.</p>

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

                <form method="POST" action="{{ route('password.confirm') }}" class="p2 brdr--mid-gray">
                    @csrf

                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">

                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" required autocomplete="current-password" value="">

                    <button type="submit" class="btn--blue">Confirm Password</button>

                    <p class="txt--center">
                        <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                    </p>
                </form>
            </div>
        </div>

        <div class="footer grd-row-col-6 txt--center">
            <p>Copyright &copy; 2022 <a href="{{ url('/') }}">{{ config('app.name') }}</a>. All rights reserved.</p>
        </div>
    </div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
