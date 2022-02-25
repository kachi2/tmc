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
                            <div style="padding-bottom:20px"></div>
                            <div class="price">
                                 N{{number_format($course->discount,2)}}
                             </div>
                            <a href="#" class="take-this-course mc-btn btn-style-1">Take this course</a>
                        </div>
                    </div>
                </div>    
                <div class="col-md-7">
                    <div class="tabs-page">
                        <ul class="nav-tabs" role="tablist">
                            <li class="active"><a href="#introduction" role="tab" data-toggle="tab">Introduction</a></li>
                            <li><a href="#outline" role="tab" data-toggle="tab">Outline</a></li>
                            <li><a href="#duration" role="tab" data-toggle="tab">Course Duration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- INTRODUCTION -->
                            <div class="tab-pane fade in active" id="introduction">
                                <h4 class="sm black bold">Introduction</h4>
                                <p>{!! $course->description !!}</p>
                                </div>
                            <!-- END / INTRODUCTION -->
    
                            <!-- OUTLINE -->
                            <div class="tab-pane fade" id="outline">
    
                                <!-- SECTION OUTLINE -->
                                <div class="section-outline">
                                    <h4 class="tit-section xsm">Outline</h4>
                                    <ul class="section-list">
                                        <li>
                                            <div class="count"></div>
                                            <div class="list-body">
                                                <i class="icon md-eye"></i>
                                                <p>{!! $course->outline !!}</p>  
                                            </div>
                                            
                                        </li>
    
                                     
                                    </ul>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="duration">
                                 <div class="section-outline">
                                    <h4 class="tit-section xsm">Duration</h4>
                                    <ul class="section-list">
                                        <li>
                                            <div class="count"></div>
                                            <div class="list-body">
                                                <i class="icon md-eye"></i>
                                                <p>{!! $course->duration !!}</p>  
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
                    <form method="post" action="{{route('traineeEnrollment',encrypt($course->id))}}"> 
                                    @csrf
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
                                                    <h4><a href="#">{{$course->name}}</a></h4>
                                                   
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
                                                <input type="text" name="name" placeholder="Full Name"  required>
                                            </div>
                                            <div class="form-lastname">
                                                <input type="text" name="email" placeholder="Email " required/>
                                            </div>
                                            <div class="form-firstname">
                                                <input type="text" name="phone" placeholder="Phone Number" required />
                                            </div>
                                            <div class="form-lastname">
                                                <input type="text" name="address" placeholder="Address" required/>
                                            </div>
                                            <div class="form-firstname">
                                                <input type="text" name="state" placeholder="State" required />
                                            </div>
                                            <div class="form-lastname" > Number of Trainee
                                                <select class="form-control" name="trainee"> 
                                                <?php $x = 1;
                                                while($x <= 50) { ?>
                                                <option value="{{$x}}">{{$x}}</option>

                                                <?php $x++; }    ?>
                                                </select>
                                            </div>
                                            <div class="form-submit-1">
                                                <button type="submit"  class="mc-btn btn-style-1"> Submit Request</button>
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

@section('scripts')
<script>
let msg = {!!  json_encode(Session::get('msg'))!!}
if(msg){

swal("Request Sent Successfully", "Your request sent successully, our team will contact you for more information");
}

</script>

@endsection