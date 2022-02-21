@extends('layouts.app')

@section('content')


 <!-- SUB BANNER -->
    <section class="sub-banner section">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="sub-banner-content">
                <p>All courses</p>

            </div>
        </div>
    </section>
    <!-- END / SUB BANNER -->


    <!-- PAGE CONTROL -->
    <section class="page-control">
        <div class="container">
            <div class="page-info">
                <a href="index-2.html"><i class="icon md-arrow-left"></i>Back to home</a>
            </div>
            <div class="page-view">
                View
                <span class="page-view-info view-grid active" title="View grid"><i class="icon md-ico-2"></i></span>
                <span class="page-view-info view-list" title="View list"><i class="icon md-ico-1"></i></span>
                <div class="mc-select">
                    <select class="select" name="" id="all-categories">
                        <option value="">All level</option>
                      
                    </select>
                </div>
            </div>
        </div>
    </section>
    <!-- END / PAGE CONTROL -->
    
    <!-- CATEGORIES CONTENT -->
    <section id="categories-content" class="categories-content">
        <div class="container">
            <div class="row">
    
                <div class="col-md-12">
                    <div class="content grid">
                        <div class="row">
                            <!-- ITEM -->
                            @foreach ($course as $cos )
                            <div class="col-sm-6 col-md-4">
                                <div class="mc-item mc-item-2">
                                    <div class="image-heading">
                                        <img src="{{asset('/frontend/images/feature/img-1.jpg')}}" alt="">
                                    </div>
                                    <div class="meta-categories"><a href="{{route('course.details', encrypt($cos->id))}}">{{$cos->category->name}}</a></div>
                                    <div class="content-item">
                                        <div class="image-author">
                                            <img src="images/avatar-1.jpg" alt="">
                                        </div>
                                        <h4><a href="{{route('course.details', encrypt($cos->id))}}">{{$cos->name}}</a></h4>
                                        <div class="name-author">
                                             <a href="{{route('course.details', encrypt($cos->id))}}">View Course</a>
                                        </div>
                                    </div>
                                    <div class="ft-item">
                                   <div class="view-info">
                                   ₦{{number_format($cos->discount,2)}}
                                </div>
                                <div class="price">
                                    <span class="price-old"> ₦{{number_format($cos->price,2)}}</span>
                                </div>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                            <!-- END / ITEM -->
                            <!-- ITEM --> 
                        </div>
                    </div>
                </div>

    
            </div>
        </div>
    </section>
@endsection