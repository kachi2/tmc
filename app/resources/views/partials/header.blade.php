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
                    <li class="current-menu-item"><a href="index-2.html">Home</a></li>
                    <li class="categories.html"><a href="index-2.html">Courses</a></li>
                    <li class="categories.html"><a href="index-2.html">Snatika</a></li>
                    <li><a href="categories.html">Blogs</a> </li>
                    <li class="categories.html"><a href="index-2.html">About Us</a></li>
                    <li class="categories.html"><a href="index-2.html">Contact Us</a></li>
                   
                   
                    <li class="menu-item-has-children">
                        <a href="#">Login</a>
                        <ul class="sub-menu">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </li>

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
                    <li class="list-item notification">
                        <div class="notification-info item-click">
                            <i class="icon md-bell"></i>
                            <span class="itemnew"></span>
                        </div>
                        <div class="toggle-notification toggle-list">
                            <div class="list-profile-title">
                                <h4>Notification</h4>
                                <span class="count-value">2</span>
                            </div>

                            <ul class="list-notification">

                                <!-- LIST ITEM -->
                                <li class="ac-new">
                                    <a href="#">
                                        <div class="list-body">
                                            <div class="author">
                                                <span>Megacourse</span>
                                                <div class="div-x"></div>
                                            </div>
                                            <p>attend Salary for newbie course</p>
                                            <div class="image">
                                                <img src="images/feature/img-1.jpg" alt="">
                                            </div>
                                            <div class="time">
                                                <span>5 minutes ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- END / LIST ITEM -->

                                

                            </ul>
                        </div>
                    </li>
                    <!-- END / NOTIFICATION -->

                    <li class="list-item account">
                        <div class="account-info item-click">
                            <img src="{{asset('/frontend/images/team-13.jpg')}}" alt="">
                        </div>
                        <div class="toggle-account toggle-list">
                            <ul class="list-account">
                                <li><a href="setting.html"><i class="icon md-config"></i>Setting</a></li>
                                <li><a href="login.html"><i class="icon md-arrow-right"></i>Sign Out</a></li>
                            </ul>
                        </div>
                    </li>


                </ul>
                <!-- END / LIST ACCOUNT INFO -->

            </nav>
            <!-- END / NAVIGATION -->

        </div>
    </header>