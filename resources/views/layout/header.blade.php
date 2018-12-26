<!-- Start Header Area -->
<header class="default-header">
    <div class="container-fluid">
        <div class="header-wrap">
            <div class="header-top d-flex justify-content-between align-items-center">
                <div class="logo">
                <a href="{{ route('home') }}"><img src="/img/logo.png" alt=""></a>
                </div>
                <div class="main-menubar d-flex align-items-center">
                    <nav class="hide">
                    <a class="@if(Route::currentRouteName() == 'home') {{ 'active' }}  @endif " href="{{ route('home') }}">Home</a>
                    <a class="@if(Route::currentRouteName() == 'generics') {{ 'active' }}  @endif "  href="{{ route('generics') }}">Generic</a>
                    <a class="@if(Route::currentRouteName() == 'elements') {{ 'active' }}  @endif "  href="{{ route('elements') }}">Elements</a>
                    @guest
                        <a class="@if(Route::currentRouteName() == 'login') {{ 'active' }}  @endif "  href="{{ route('login') }}">Login</a>
                        <a class="@if(Route::currentRouteName() == 'register') {{ 'active' }}  @endif " href="{{ route('register') }}">{{ __('Register') }}</a>
                    @else
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                    </nav>
                    <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Area -->