<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @stack('third_party_stylesheets')

    @stack('page_css')
</head>
<body>
    <div id="layout" class="grd">
        <div class="grd-row">
            <div id="sidebar" class="grd-row-col-1-6 bg--light-gray p1">
                @include('layouts.sidebar')
            </div>

            <div class="grd-row-col-5-6">
                <div class="content grd-row">
                    <div class="content-wrapper p1">
                        <div class="header p1">@yield('title')</div>

                        @yield('content')
                    </div>
                </div>
                <div class="footer grd-row">
                    <div class="grd-row-col-6 txt--center">
                        <p>Copyright &copy; 2022 <a href="{{ url('/') }}">{{ config('app.name') }}</a>. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

    @stack('third_party_scripts')

    @stack('page_scripts')
</body>
</html>
