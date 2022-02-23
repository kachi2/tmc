@extends('layouts.app')
@section('content')
@include('partials.adminbar')


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
                          
                        </div>

                      
                        {{-- <div class="widget widget_equipment">
                            <i class="icon md-config"></i>
                            <h4 class="xsm black bold">Equipment</h4>
                            <div class="equipment-body">
                                <a href="#">Photoshop CC</a>,
                                <a href="#">Illustrator CC</a>
                            </div>
                        </div> --}}
                       
                     
                    </div>
                </div>    
                <div class="col-md-7">
                    <div class="tabs-page">
                        <ul class="nav-tabs" role="tablist">
                            <li class="active"><a href="#introduction" role="tab" data-toggle="tab">Introduction</a></li>
                            <li><a href="#outline" role="tab" data-toggle="tab">Outline</a></li>
                            <li><a href="#review" role="tab" data-toggle="tab">Review</a></li>
                                 <li><a href="#duration" role="tab" data-toggle="tab">Duration</a></li>
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
                             <div class="tab-pane fade" id="duration">
    
                                <!-- SECTION OUTLINE -->
                                <div class="section-outline">
                                    <h4 class="tit-section xsm">Duration</h4>
                                   <p>{{$course->duration}}</p> 
                                </div>
                                <!-- END / SECTION OUTLINE -->
    
                          
                                <!-- END / SECTION OUTLINE -->
                            </div>
                      
                            <!-- END / REVIEW -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / COURSE TOP -->



    <!-- END / COURSE CONCERN -->

   @endsection 
