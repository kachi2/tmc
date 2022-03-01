<!-- PROFILE FEATURE -->
    <section class="profile-feature">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="info-author">
                <div class="image">
                    <img src="images/team-13.jpg" alt="">
                </div>    
                <div class="name-author">
                    <h2 class="big">{{strtoupper(auth()->user()->name)}}</h2>
                </div>     
                <div class="address-author">
                    <i class="fa fa-envelope"></i>
                    <h3>{{auth()->user()->email}}</h3>
                </div>
            </div>
            <div class="info-follow">
                <div class="trophies">
                    <span>{{count($user_courses)}}</span>
                    <p>Courses</p>
                </div>
                <div class="trophies">
                    <span>{{count($user_completed)}}</span>
                    <p>Completed Courses</p>
                </div>
                <div class="trophies">
                    <span>{{count($user_pending)}}</span>
                    <p>Pending Courses</p>
                </div>
                
            </div>
        </div>
    </section>
    <!-- END / PROFILE FEATURE -->
    <!-- CONTEN BAR -->
    <section class="content-bar">
        <div class="container">
            <ul>
                <li>
                    <a href="{{route('admin.index')}}">
                        <i class="icon md-book-1"></i>
                       Courses
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.category', encrypt(1))}}">
                        <i class="icon md-people"></i>
                        Categories
                    </a>
                </li>
                <li>
                    <a href="{{route('courses.enrollment')}}">
                        <i class="icon md-shopping"></i>
                        Enrollment
                    </a>
                </li>
                <li>
                    <a href="{{route('account.profile')}}">
                        <i class="icon md-user-minus"></i>
                        Profile
                    </a>
                </li>
            </ul>
        </div>
    </section>
   <!-- END / CONTENT BAR -->



