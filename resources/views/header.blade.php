<div class="header">
    <div class="action left pull-left">
        @yield('back-btn')
    </div>
    Brewtime
    <div class="action right pull-right">
        @yield('forward-btn')
        @if(auth()->check())
        <a href="{{ url('auth/logout', [], false) }}"><i class="fa fa-fw fa-sign-out"></i></a>
        @endif
    </div>
</div>
