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
                                    <img src="{{asset('/frontend/images/blog/'.$course->cover_image)}}" alt="">
                                </div>
                            </div>
                            <div style="padding-bottom:20px"></div>
                            <div class="price">
                                 N{{number_format($course->discount,2)}}
                             </div>
                            <a href="#" class="take-this-course mc-btn btn-style-1">Pay Now</a>
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

    

    

@endsection

@section('scripts')
<script>
let msg = {!!  json_encode(Session::get('msg'))!!}
let alert = {!! json_encode(Session::get('alert')) !!}
if(msg){

Swal.fire({
    'title': alert,
    'icon': alert,
    'text': msg
});
}

</script>

@endsection