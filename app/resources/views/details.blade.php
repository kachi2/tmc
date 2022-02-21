@extends('layouts.app')
@section('content')
<!-- SUB BANNER -->
    <section class="sub-banner sub-banner-course">
        <div class="awe-static bg-sub-banner-course"></div>
        <div class="container">
            <div class="sub-banner-content">
                <h2 class="text-center">{{$course->name}}</h2>
            </div>
        </div>
    </section>

    <!-- COURSE -->
    <section class="course-top">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="sidebar-course-intro">
                        <div class="breadcrumb">
                            <a href="#">Home</a> / 
                            <a href="#">Course</a> / 
                            {{$course->name}}
                        </div>   
                        <div class="video-course-intro">
                            <div class="inner">
                                <div class="video-place">
                                    <div class="img-thumb">
                                        <img src="images/thumb-intro.jpg" alt="">
                                    </div>
                                    
                                   
                                </div>
                                 <div class="image-heading">
                                    <img src="{{asset('/frontend/images/feature/img-1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="price">
                                 N{{number_format($course->discount,2)}}
                             </div>
                            <a href="#" class="take-this-course mc-btn btn-style-1">Take this course</a>
                        </div>

                        <div class="new-course">
                            
                            <div class="item course-code">
                                <i class="icon md-time"></i>
                                <h4><a href="#">Duration</a></h4>
                                <p class="detail-course">{{$course->duration}}</p>
                            </div>
                        </div>
                        <hr class="line">
                     
                        <hr class="line">
                        {{-- <div class="widget widget_equipment">
                            <i class="icon md-config"></i>
                            <h4 class="xsm black bold">Equipment</h4>
                            <div class="equipment-body">
                                <a href="#">Photoshop CC</a>,
                                <a href="#">Illustrator CC</a>
                            </div>
                        </div> --}}
                       
                        <div class="widget widget_share">
                            <i class="icon md-forward"></i>
                            <h4 class="xsm black bold">Share course</h4>
                            <div class="share-body">
                                <a href="#" class="twitter" title="twitter">
                                    <i class="icon md-twitter"></i>
                                </a>
                                <a href="#" class="pinterest" title="pinterest">
                                    <i class="icon md-pinterest-1"></i>
                                </a>
                                <a href="#" class="facebook" title="facebook">
                                    <i class="icon md-facebook-1"></i>
                                </a>
                                <a href="#" class="google-plus" title="google plus">
                                    <i class="icon md-google-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="col-md-7">
                    <div class="tabs-page">
                        <ul class="nav-tabs" role="tablist">
                            <li class="active"><a href="#introduction" role="tab" data-toggle="tab">Introduction</a></li>
                            <li><a href="#outline" role="tab" data-toggle="tab">Outline</a></li>
                            <li><a href="#review" role="tab" data-toggle="tab">Review</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- INTRODUCTION -->
                            <div class="tab-pane fade in active" id="introduction">
                                <h4 class="sm black bold">Introduction</h4>
                                <p>{{$course->description}}</p>
                                </div>
                            <!-- END / INTRODUCTION -->
    
                            <!-- OUTLINE -->
                            <div class="tab-pane fade" id="outline">
    
                                <!-- SECTION OUTLINE -->
                                <div class="section-outline">
                                    <h4 class="tit-section xsm">Outline</h4>
                                    <ul class="section-list">
                                        <li>
                                            <div class="count"><span>1</span></div>
                                            <div class="list-body">
                                                <i class="icon md-eye"></i>
                                                <p>{{$course->outline}}></p>  
                                            </div>
                                            
                                        </li>
    
                                     
                                    </ul>
                                </div>
                                <!-- END / SECTION OUTLINE -->
    
                          
                                <!-- END / SECTION OUTLINE -->
                            </div>
                            <!-- END / OUTLINE -->
    
                      
                            <!-- END / REVIEW -->
    
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / COURSE TOP -->

    <!-- FORM CHECKOUT -->
    <div class="form-checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form>
                        <ul id="bar">
                            <li class="active">Enroll for this course</li>
                            
                        </ul>
                        <span class="closeForm"><i class="icon md-close-1"></i></span>
                        <div class="form-body">
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-5">
                                      <div class="form-1">
                                            <div class="mc-item mc-item-2">
                                                <div class="image-heading">
                                                    <img src="{{asset('/frontend/images/feature/img-1.jpg')}}" alt="">
                                                </div>
                                                <div class="meta-categories"><a href="#">{{$course->category->name}}</a></div>
                                                <div class="content-item">
                                                    <div class="image-author">
                                                        <img src="images/avatar-1.jpg" alt="">
                                                    </div>
                                                    <h4><a href="course-intro.html">{{$course->name}}</a></h4>
                                                   
                                                </div>
                                                <div class="ft-item">
                                                    
                                                   <div class="view-info">
                                                ₦{{number_format($course->discount,2)}}
                                                </div>
                                                <div class="price">
                                                    <span class="price-old"> ₦{{number_format($course->price,2)}}</span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-2">
                                            <h3 class="fs-title text-capitalize">Please enter your details</h3>
                                            <div class="form-firstname">
                                                <input type="text" placeholder="Full Name" />
                                            </div>
                                            <div class="form-lastname">
                                                <input type="text" placeholder="Email " />
                                            </div>
                                            <div class="form-firstname">
                                                <input type="text" placeholder="Phone Number" />
                                            </div>
                                            <div class="form-lastname">
                                                <input type="text" placeholder="Address" />
                                            </div>
                                            <div class="form-firstname">
                                                <input type="text" placeholder="State" />
                                            </div>
                                            <div class="form-lastname"> Number of Candidates
                                                <select class="form-control"> 
                                                <option> 1 - 5</option>
                                                <option> 6- 10 </option>
                                                <option> 10 - 50 </option>
                                                <option> 51 - 100 </option>
                                                </select>
                                            </div>
                                            <div class="form-submit-1">
                                                <input type="button" value="Submit Request" class="next mc-btn btn-style-1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>


                            <fieldset>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-1">
                                         <div class="mc-item mc-item-2">
                                                <div class="image-heading">
                                                    <img src="{{asset('/frontend/images/feature/img-1.jpg')}}" alt="">
                                                </div>
                                                <div class="meta-categories"><a href="#">{{$course->category->name}}</a></div>
                                                <div class="content-item">
                                                    <div class="image-author">
                                                        <img src="images/avatar-1.jpg" alt="">
                                                    </div>
                                                    <h4><a href="course-intro.html">{{$course->name}}</a></h4>
                                                   
                                                </div>
                                                <div class="ft-item">
                                                    
                                                   <div class="view-info">
                                                ₦{{number_format($course->discount,2)}}
                                                </div>
                                                <div class="price">
                                                    <span class="price-old"> ₦{{number_format($course->price,2)}}</span>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END / FORM CHECKOUT -->
    
    <!-- COURSE CONCERN -->
    <section id="course-concern" class="course-concern">
        <div class="container">
            <h3 class="md black">You may also like</h3>
            <div class="row">
            @foreach ($relate as $rr)
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <!-- MC ITEM -->
                    <div class="mc-item mc-item-2">
                        <div class="image-heading">
                            <img src="{{asset('/frontend/images/feature/img-1.jpg')}}" alt="">
                        </div>
                        <div class="meta-categories"><a href="#">{{$rr->category->name}}</a></div>
                        <div class="content-item">
                            <div class="image-author">
                                <img src="images/avatar-1.jpg" alt="">
                            </div>
                            <h4><a href="course-intro.html">{{$rr->name}}</a></h4>
                            <div class="name-author">
                                 <a href="#">View Course</a>
                            </div>
                        </div>
                        <div class="ft-item">
                            <div class="view-info">
                                   ₦{{number_format($rr->discount,2)}}
                                </div>
                                <div class="price">
                                    <span class="price-old"> ₦{{number_format($rr->price,2)}}</span>
                                </div>
                        </div>
                    </div>
                    <!-- END / MC ITEM -->
                </div>
                  @endforeach
    
            </div>
        </div>
    </section>
    <!-- END / COURSE CONCERN -->
    

@endsection