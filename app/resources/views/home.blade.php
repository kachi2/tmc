@extends('layouts.app')

@section('content')

 <section class="slide" style="background-image: url({{asset('/frontend/images/homeslider/bg.jpg')}}">
        <div class="container">
            <div class="slide-cn" id="slide-home">
                <!-- SLIDE ITEM -->
                <div class="slide-item">
                    <div class="item-inner">
                        <div class="text">
                            <h2>Learn more - Earn more</h2>
                            <p>We Are The Leading And Specialist Provider <br>Of Specialized Corporate Training Including Governance, <br> Risk & Compliance, Financial Crime Prevention, <br>And Leadership Training Focused On Cultivating <br>The Right Attitude And Skills In Your Teams.o<br> <br> 
                            </p>
                            <div class="group">
                                <a href="#" class="mc-btn btn-style-1">Get Started</a>
                            </div>
                        </div>

                        <div class="img">
                            <img src="{{asset('/frontend/images/homeslider/img-thumb.png')}}" alt="">
                        </div>
                    </div>

                </div>  
                <!-- SLIDE ITEM -->     

                <!-- SLIDE ITEM -->
                <div class="slide-item">
                    <div class="item-inner">
                        <div class="text">
                            <h2>Learn more - Earn more</h2>
                            <p>this is not only an elegant theme but also<br> a course management system<br> for wordpress and drupal
                            </p>
                            <div class="group">
                                <a href="#" class="mc-btn btn-style-1">See full features</a>
                            </div>
                        </div>

                        <div class="img">
                            <img src="{{asset('/frontend/images/homeslider/img-thumb.png')}}" alt="">
                        </div>

                    </div>  
                </div>  
                <!-- SLIDE ITEM -->  

            </div>
        </div>
    </section>
    <!-- END / HOME SLIDER -->


    <!-- AFTER SLIDER -->
    <section id="after-slider" class="after-slider section">
        <div class="awe-color bg-color-1"></div>
        <div class="after-slider-bg-2"></div>
        <div class="container">
    
            <div class="after-slider-content tb">
                <div class="inner tb-cell">
                    <h4>Find your course</h4>
                    <div class="course-keyword">
                        <input type="text" placeholder="Course keyword">
                    </div>
                    <div class="mc-select-wrap">
                        <div class="mc-select">
                            <select class="select" name="" id="all-categories">
                                <option value="" selected>All categories</option>
                                <option value="">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="mc-select-wrap">
                        <div class="mc-select">
                            <select class="select" name="" id="beginner-level">
                                <option value="" selected>Beginner level</option>
                                <option value="">Beginner level 2</option>
                                <option value="">Beginner level 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="tb-cell text-right">
                    <div class="form-actions">
                        <input type="submit" value="Find Course" class="mc-btn btn-style-1">
                    </div>
                </div>
            </div>
    
        </div>
    </section>
@endsection