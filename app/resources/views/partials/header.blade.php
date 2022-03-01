<div id="page-wrap">

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="pre-icon">
            <div class="pre-item pre-item-1"></div>
            <div class="pre-item pre-item-2"></div>
            <div class="pre-item pre-item-3"></div>
            <div class="pre-item pre-item-4"></div>
        </div>
    </div>
    <!-- END / PRELOADER -->

    <!-- HEADER -->
    <header id="header" class="header">
        <div class="container">
            <!-- LOGO -->
            <div class="logo"><a href="{{route('index')}}"><img src="{{asset('/frontend/images/logo.jpg')}}" width="80px" height="20px"alt=""></a></div>
            <!-- END / LOGO -->

            <!-- NAVIGATION -->
            <nav class="navigation">
                <div class="open-menu">
                    <span class="item item-1"></span>
                    <span class="item item-2"></span>
                    <span class="item item-3"></span>
                </div>
                <!-- MENU -->
                <ul class="menu">
                    <li class="current-menu-item"><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('courses')}}">Courses</a></li>
                    <li><a href="{{route('courses.snatika')}}">Snatika</a></li>
                    <li ><a href="{{route('about-us')}}">About us</a></li>
                    <li ><a href="{{route('contact-us')}}">Contact us</a></li>
                    @if(!auth()->user())
                        <li class="menu-item-has-children">
                        <a href="#">Login</a>
                        <ul class="sub-menu">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>
                <!-- END / MENU -->
                <!-- SEARCH BOX -->
                <div class="search-box">
                    <i class="icon md-search"></i>
                    <div class="search-inner">
                        <form>
                            <input type="text" placeholder="key words">
                        </form>
                    </div>
                </div>
                <!-- END / SEARCH BOX -->

                <!-- LIST ACCOUNT INFO -->
                <ul class="list-account-info">

                   
                    <!-- END / MESSAGE INFO -->

                    <!-- NOTIFICATION -->
                   
                    <!-- END / NOTIFICATION -->

                    <li class="list-item account">
                    @if(Auth()->user())
                        <div class="account-info item-click">
                            <img src="{{asset('/frontend/images/team-13.jpg')}}" alt="">
                        </div>
                        <div class="toggle-account toggle-list">
                            <ul class="list-account">
                                <li><a href="setting.html"><i class="icon md-config"></i>Setting</a></li>
                                <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('formlog').submit()";><i class="icon md-arrow-right"></i>Sign Out</a>

                                    <form action="{{route('logout')}}" method="post" id="formlog">
                                    @csrf
                                    </form>
                                
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endif


                </ul>
                <!-- END / LIST ACCOUNT INFO -->

            </nav>
            <!-- END / NAVIGATION -->

        </div>
    </header>