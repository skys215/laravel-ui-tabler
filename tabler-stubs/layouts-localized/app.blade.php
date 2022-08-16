<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ config('app.name') }}</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @stack('third_party_stylesheets')

    @stack('page_css')
  </head>
  <body>
    <div class="wrapper">
        <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
            @include('layouts.sidebar')
        </aside>

        <div class="page-wrapper">
            <div class="container-xl">
              <!-- Page title -->
              <div class="page-header d-print-none">
                <div class="row align-items-center">
                  <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                      @yield('pretitle')
                    </div>
                    <h2 class="page-title">
                      @yield('title')
                    </h2>
                  </div>
                  @yield('page_title_action')
                </div>
              </div>
            </div>
            <div class="page-body">
              <div class="container-xl">
                @yield('content')
              </div>
            </div>

            <footer class="footer footer-transparent d-print-none">
              <div class="container-xl">
                <div class="row flex-row-reverse">
                  <div class="col-12 mt-3 mt-lg-0">
                    <ul class="list-inline list-inline-dots mb-0">
                      <li class="list-inline-item">
                        Copyright &copy; 2022
                        <a href="." class="link-secondary">{{ config('app.name') }}</a>.
                        All rights reserved.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </footer>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    {{-- <script src="{{ mix('js/vendor.js') }}"></script> --}}

    @stack('third_party_scripts')

    @stack('page_scripts')
</body>
</html>
