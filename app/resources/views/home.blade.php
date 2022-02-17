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
                                <a href="{{route('courses')}}" class="mc-btn btn-style-1">Get Started</a>
                            </div>
                        </div>

                        <div class="img">
                            <img src="{{asset('/frontend/images/student.png')}}" alt="">
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
                               <a href="{{route('courses')}}" class="mc-btn btn-style-1">Get Started</a>
                            </div>
                        </div>

                        <div class="img">
                            <img src="{{asset('/frontend/images/imag.png')}}" alt="">
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
      <section id="mc-section-1" class="mc-section-1 section" style="padding-bottom:0px">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="mc-section-1-content-1"> 
                        <h2 class="big">Course Categories</h2>
                        <p class="mc-text">We are the leading and specialist provider of specialized corporate training including Governance, Risk & Compliance, Financial Crime, and Leadership training focused on cultivating the right attitude and skills in your teams.</p>
            
                    </div>
                </div>
    
                <div class="col-md-6 col-lg-offset-1">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="featured-item">
                                <i class="icon icon-featured-1"></i>
                                <h4 class="title-box text-uppercase">Corporate Governance</h4>
                                <p>Intermediate Credit Analysis and Management</p>
                            </div>
                        </div>
    
                        <div class="col-sm-6">
                            <div class="featured-item">
                                <i class="icon icon-featured-2"></i>
                                <h4 class="title-box text-uppercase">Financial Crime Prevention</h4>
                                <p>Know Your Customer Specialization</p>
                            </div>
                        </div>
    
                        <div class="col-sm-6">
                            <div class="featured-item">
                                <i class="icon icon-featured-3"></i>
                                <h4 class="title-box text-uppercase">Insurance Courses</h4>
                                <p>Compliance for Insurance</p>
                            </div>
                        </div>
    
                        <div class="col-sm-6">
                            <div class="featured-item">
                                <i class="icon icon-featured-4"></i>
                                <h4 class="title-box text-uppercase">Risk Management</h4>
                                <p>Compliance Risk Management</p>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    <!-- END / SECTION 1 -->
    <!-- SECTION 3 -->
    <section id="mc-section-3" class="mc-section-3 section">
        <div class="container">
            <!-- FEATURE -->
            <div class="feature-course">
                <h4 class="title-box text-uppercase">FEATURE COURSE</h4>
                <a href="categories.html" class="all-course mc-btn btn-style-1">View all</a>
                <div class="row">
               
                 <div class="feature-slider">
                  @foreach ($course as $cc)
                        <div class="mc-item mc-item-1">
                            <div class="image-heading">
                                <img src="{{asset('/frontend/images/feature/img-1.jpg')}}" alt="">
                            </div>
                            <div class="meta-categories"><a href="#">{{$cc->category->name}}</a></div>
                            <div class="content-item">
                                <div class="image-author">
                                    <img src="images/avatar-1.jpg" alt="">
                                </div>
                                <h4><a href="course-intro.html">{{$cc->name}}</a></h4>
                                <div class="name-author">
                                     <a href="{{route('course.details', encrypt($cc->id))}}">View Course Details</a>
                                </div>
                            </div>
                            <div class="ft-item">
                                
                                <div class="view-info">
                                    <i class="fa fa-eye"></i>
                                   ₦{{number_format($cc->discount,2)}}
                                </div>
                                <div class="price">
                                    <span class="price-old"> ₦{{number_format($cc->price,2)}}</span>
                                </div>
                            </div>
                        </div>
                          @endforeach
                    </div>
               
                </div>
            </div>
            <!-- END / FEATURE -->
        </div>
    </section>
    <!-- END / SECTION 3 -->
@endsection