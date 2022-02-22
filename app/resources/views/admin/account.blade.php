@extends('layouts.app')

@section('contents')

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
                    <h2 class="big">Anna Molly</h2>
                </div>     
                <div class="address-author">
                    <i class="fa fa-map-marker"></i>
                    <h3>Hanoi, Vietnam</h3>
                </div>
            </div>
            <div class="info-follow">
                <div class="trophies">
                    <span>12</span>
                    <p>Trophies</p>
                </div>
                <div class="trophies">
                    <span>12</span>
                    <p>Follower</p>
                </div>
                <div class="trophies">
                    <span>20</span>
                    <p>Following</p>
                </div>
                <div class="trophies">
                    <span>$ 149,902</span>
                    <p>Balance</p>
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
                    <a href="account-learning.html">
                        <i class="icon md-book-1"></i>
                        Learning
                    </a>
                </li>
                <li class="current">
                    <a href="account-teaching.html">
                        <i class="icon md-people"></i>
                        Teaching
                    </a>
                </li>
                <li>
                    <a href="account-assignment.html">
                        <i class="icon md-shopping"></i>
                        Assignment
                    </a>
                </li>
                <li>
                    <a href="account-profile-guest-view.html">
                        <i class="icon md-user-minus"></i>
                        Profile
                    </a>
                </li>
                <li>
                    <a href="account-inbox.html">
                        <i class="icon md-email"></i>
                        Inbox
                    </a>
                </li>
            </ul>
        </div>
    </section>
   <!-- END / CONTENT BAR -->



@endsection