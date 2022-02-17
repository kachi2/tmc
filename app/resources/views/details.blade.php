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
                                    <div class="awe-overlay"></div>
                                    <a href="#" class="play-icon">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                                <div class="video embed-responsive embed-responsive-16by9">
                                    <iframe src="http://player.vimeo.com/video/100872038" class="embed-responsive-item">
                                    </iframe>
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
                                <p class="detail-course">{{$course->duration}}weeks</p>
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
                            <li class="active"><span class="count">1</span>Register</li>
                            <li><span class="count">2</span>Order and payment</li>
                            <li><span class="count">3</span>Finish checkout</li>
                        </ul>
                        <span class="closeForm"><i class="icon md-close-1"></i></span>
                        <div class="form-body">
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-1">
                                            <h3 class="fs-title text-capitalize">sign in</h3>
                                            <div class="form-email">
                                                <input type="text" placeholder="Email">
                                            </div>
                                            <div class="form-password">
                                                <input type="password" placeholder="Password">
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" id="check">
                                                <label for="check">
                                                <i class="icon md-check-2"></i>
                                                Remember me</label>
                                                <a href="#">Forget password?</a>
                                            </div>
                                            <div class="form-submit-1">
                                                <input type="button" value="Sign In and Continue" class="next mc-btn btn-style-1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-2">
                                            <h3 class="fs-title text-capitalize">New Member</h3>
                                            <div class="form-firstname">
                                                <input type="text" placeholder="First name" />
                                            </div>
                                            <div class="form-lastname">
                                                <input type="text" placeholder="Last name" />
                                            </div>
                                            <div class="form-datebirth">
                                                <input type="text" placeholder="Date of Birth">
                                            </div>
                                            <div class="form-email">
                                                <input type="text" name="pass" placeholder="Annamolly@outlook.com" class="error">
                                                <span class="text-error">this email has been already taken</span>
                                            </div>
                                            <div class="form-password">
                                                <input type="password" name="pass" placeholder="Password" class="valid">
                                            </div>
                                            <div class="form-submit-1">
                                                <input type="button" value="Sign Up and Continue" class="next mc-btn btn-style-1">
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
                                                    <img src="images/feature/img-1.jpg" alt="">
                                                </div>
                                                <div class="meta-categories"><a href="#">Web design</a></div>
                                                <div class="content-item">
                                                    <div class="image-author">
                                                        <img src="images/avatar-1.jpg" alt="">
                                                    </div>
                                                    <h4><a href="course-intro.html">The Complete Digital Photography Course Amazon Top Seller</a></h4>
                                                    <div class="name-author">
                                                        By <a href="#">Name of Mr or Mrs</a>
                                                    </div>
                                                </div>
                                                <div class="ft-item">
                                                    <div class="rating">
                                                        <a href="#" class="active"></a>
                                                        <a href="#" class="active"></a>
                                                        <a href="#" class="active"></a>
                                                        <a href="#"></a>
                                                        <a href="#"></a>
                                                    </div>
                                                    <div class="view-info">
                                                        <i class="icon md-users"></i>
                                                        2568
                                                    </div>
                                                    <div class="comment-info">
                                                        <i class="icon md-comment"></i>
                                                        25
                                                    </div>
                                                    <div class="price">
                                                        $190
                                                        <span class="price-old">$134</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-2">
                                            <h3 class="fs-title">Choose your payment method</h3>
                                            <ul class="pay">
                                                <li>
                                                    <input type="radio" name="pay" id="visa">
                                                    <label for="visa">
                                                        <i class="icon-radio"></i>
                                                        Visa / Master Card
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="pay" id="paypal">
                                                    <label for="paypal">
                                                        <i class="icon-radio"></i>
                                                        Paypal
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="pay" id="cash">
                                                    <label for="cash">
                                                        <i class="icon-radio"></i>
                                                        Cash
                                                    </label>
                                                </li>
                                            </ul>

                                            <div class="form-cardnumber">
                                                <label for="cardnumber">Card number</label>
                                                <input type="text" id="cardnumber">
                                            </div>

                                            <div class="form-expirydate">
                                                <label for="expirydate">Expiry date</label>
                                                <input type="text" id="expirydate">
                                                <input type="text">
                                            </div>

                                            <div class="form-code">
                                                <label for="code">Code</label>
                                                <input type="text" id="code">
                                            </div>

                                            <div class="clearfix"></div>

                                            <div class="form-couponcode">
                                                <label for="couponcode">Coupon code</label>
                                                <input type="text" id="couponcode">
                                            </div>

                                            <div class="form-total">
                                                <h4>Total Payment</h4>
                                                <span class="price">$89</span>
                                            </div>
                                            
                                            <div class="clearfix"></div>

                                            <div class="form-submit-1">
                                                <input type="button" value="Confirm and Finish" class="next mc-btn btn-style-1">
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
                                                    <img src="images/feature/img-1.jpg" alt="">
                                                </div>
                                                <div class="meta-categories"><a href="#">Web design</a></div>
                                                <div class="content-item">
                                                    <div class="image-author">
                                                        <img src="images/avatar-1.jpg" alt="">
                                                    </div>
                                                    <h4><a href="course-intro.html">The Complete Digital Photography Course Amazon Top Seller</a></h4>
                                                    <div class="name-author">
                                                        By <a href="#">Name of Mr or Mrs</a>
                                                    </div>
                                                </div>
                                                <div class="ft-item">
                                                    <div class="rating">
                                                        <a href="#" class="active"></a>
                                                        <a href="#" class="active"></a>
                                                        <a href="#" class="active"></a>
                                                        <a href="#"></a>
                                                        <a href="#"></a>
                                                    </div>
                                                    <div class="view-info">
                                                        <i class="icon md-users"></i>
                                                        2568
                                                    </div>
                                                    <div class="comment-info">
                                                        <i class="icon md-comment"></i>
                                                        25
                                                    </div>
                                                    <div class="price">
                                                        $190
                                                        <span class="price-old">$134</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-2">
                                            <h3 class="fs-title">Thank You For Your Purchase</3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>

                                            <div class="widget widget_share">
                                                <h4>Share</h4>
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

                                            <div class="form-submit-1">
                                                <input type="submit" value="Start Learning" class="next mc-btn btn-style-1">
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
                                <i class="icon md-users"></i>
                                2568
                            </div>
                            <div class="comment-info">
                                <i class="icon md-comment"></i>
                                {{$rr->discount}}
                            </div>
                            <div class="price">
                                $190
                                <span class="price-old">{{$rr->price}}134</span>
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