<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{route('home')}}">
            <img src="{{ asset('img/logo.png')}}">
        </a>
            
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            </a>
    </div>
    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item">
                Home
            </a>
            <a class="navbar-item">
                Documentation
            </a>      
        </div>
        <div class="navbar-end" id="appND">
            <div class="navbar-item">
                @if (Auth::guest())
                    <div class="navbar-item">
                        <a href="{{route('login')}}" class="navbar-item">Login</a>
                    </div>
                    <div class="navbar-item">
                        <a href="{{route('register')}}" class="navbar-item">Register</a>
                    </div>
                @else
                    <b-dropdown v-cloak hoverable>
                            <button class="is-aligned-right nav-item button" slot="trigger" style="margin-top: 0.5rem;">
                                <span>Hey {{ Auth::user()->name }}</span>
                                <span class="icon"><i class="fa fa-caret-down"></i></span>
                            </button>
                        
                            <a href="">
                                <b-dropdown-item>Profile</b-dropdown-item>
                            </a>
                            <a href="">
                                <b-dropdown-item>Notification</b-dropdown-item>
                            </a>
                            <a href="{{route('manage.dashboard')}}">
                                <b-dropdown-item>Manage</b-dropdown-item>
                            </a>
                            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <b-dropdown-item>Logout
                                    @include('_includes.forms.logout')
                                </b-dropdown-item>  
                            </a>     
                    </b-dropdown>
                 @endif
            </div>
        </div>
    </div>
</nav>