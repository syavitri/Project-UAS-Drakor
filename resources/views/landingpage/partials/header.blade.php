<!-- BEGIN | Header -->
<header class="ht-header full-width-hd">
    <div class="row">
        <nav id="mainNav" class="navbar navbar-default navbar-custom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header logo">
                <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <div id="nav-icon1">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <a href="/"><img class="logo" src="{{ asset('landing_asset/images/logo1.png') }}" alt=""
                        width="119" height="58"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav flex-child-menu menu-left">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="dropdown first">
                        <a class="btn btn-default lv1" href="{{ url('/') }}">
                            Home
                        </a>
                    </li>
                    <li class="dropdown first">
                        <a class="btn btn-default lv1" href="{{ url('/movies') }}">
                            movies
                        </a>
                    </li>
                    <li class="dropdown first">
                        <a class="btn btn-default lv1" href="#">
                            Contact
                        </a>
                    </li>
                    <li class="dropdown first">
                        <a class="btn btn-default lv1" href="#">
                            About Us
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav flex-child-menu menu-right">
                    <li><a href="#">Help</a></li>

                    @if(Auth::user())
                        <li><a href="#">{{Auth::user()->name}}</a></li>
                        <li class="btn"><a href="/logout"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOG
                                OUT</a></li>
                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <li class="loginLink"><a href="#">LOG In</a></li>
                        <li class="btn signupLink"><a href="#">sign up</a></li>
                    @endif
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <!-- search form -->
    </div>

</header>
<!-- END | Header -->
