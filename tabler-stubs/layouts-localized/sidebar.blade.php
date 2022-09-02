<div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
    <span class="navbar-toggler-icon"></span>
  </button>
  <h1 class="navbar-brand navbar-brand-autodark">
    <a href="{{ url('/') }}">{{ config('app.name') }}</a>
  </h1>
  <div class="navbar-nav flex-row d-lg-none">
    {{-- <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
      <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
    </a>
    <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
      <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
    </a> --}}

    <div class="nav-item dropdown">
      <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
        <div class="d-none d-xl-block ps-2">
          <div>{{ Auth::user()->name }}</div>
          <div class="mt-1 small text-muted">UI Designer</div>
        </div>
      </a>
      <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <a href="#" class="dropdown-item">{{ __('auth.sign_out') }}</a>
      </div>
    </div>
  </div>
  <div class="collapse navbar-collapse" id="navbar-menu">
    <ul class="navbar-nav pt-lg-3">
      @include('layouts.menu')
    </ul>
  </div>
</div>
