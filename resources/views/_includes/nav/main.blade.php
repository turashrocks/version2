<nav class="nav has-shadow">
        <div class="nav-left">
            <a class="nav-item" href="{{route('home')}}">
                <img src="{{ asset('img/logo.png')}}" alt="ä">
            </a>
            <a href="" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
            <a href="" class="nav-item is-tab is-hidden-mobile m-l-10">Discuss</a>
            <a href="" class="nav-item is-tab is-hidden-mobile m-l-10">Share</a>
        </div>
        <div class="nav-right" style="overflow:visible;">
           @if (Auth::guest())
            <a href="{{route('login')}}" class="nav-item is-tab is-hidden-mobile m-l-10">Login</a>
            <a href="{{route('register')}}" class="nav-item is-tab is-hidden-mobile m-l-10">Join the community</a>

           @else 
           <b-dropdown hoverable>
                <button class="is-aligned-right nav-item button" slot="trigger" style="margin-top: 0.5rem;">
                    <span>Hey {{ Auth::user()->name }}</span>
                    <span class="icon"><i class="fa fa-caret-down"></i></span>
                </button>
               
                    <b-dropdown-item><a href="">Profile</a></b-dropdown-item>
                    <b-dropdown-item><a href="">Notification</a></b-dropdown-item>
                    <b-dropdown-item><a href="{{route('manage.dashboard')}}">Manage</a></b-dropdown-item>
                    <b-dropdown-item>
                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                        @include('_includes.forms.logout')
                    </b-dropdown-item>
                
            </b-dropdown>
           @endif
        </div>
</nav>