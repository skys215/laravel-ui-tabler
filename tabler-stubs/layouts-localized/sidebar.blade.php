<div class="logo">
    <a href="{{ route('home') }}">
        {{ config('app.name') }}
    </a>
</div>

<div id="menu">
    <div class="sidebar-menu">
        <p class="side-menu-heading">
            <span class="fnt--light-gray">{{ Auth::user()->name }}</span>
            <a href="{{ route('logout') }}" class="brdr--mid-gray  logout-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('auth.sign_out') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </p>

        <ul class="sidebar-menu-list list--unstyled p0 fnt-white">
            @include('layouts.menu')
        </ul>
    </div>
</div>
