@extends('layouts.app')
@section('content')
 @include('partials.adminbar')

  
    <!-- COURSE CONCERN -->
    <section id="course-concern" class="course-concern">
        <div class="container">
            
            <div class="price-course">
                <div class="create-coures">
                    <a href="{{route('admin.course.create')}}" class="mc-btn btn-style-1">Create new course</a>
                </div>

            </div>

            <div style="padding-bottom:20px"></div>
            <div class="row">

            @foreach ($courses as $cos )
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <!-- MC ITEM -->
                    <div class="mc-teaching-item mc-item mc-item-2">
                        <div class="image-heading">
                            <img src="{{asset('/frontend/images/feature/img-1.jpg')}}" alt="">
                        </div>
                        <div class="meta-categories"><a href="#">{{$cos->category->name}}</a></div>
                        <div class="content-item">
                            <div class="image-author">
                                <img src="images/avatar-1.jpg" alt="">
                            </div>
                            <h4><a href="{{route('admin.course.details', encrypt($cos->id))}}">{{$cos->name}}</a></h4>
                        </div>
                        <div class="ft-item">
                           
                            <div class="">
                               Views: 294
                              {{$cos->views}}
                            | Enrollments: 
                              {{count($cos->enrollment($cos->id))}}
                            </div>
                            

                        </div>

                        <div class="edit-view">
                            <a href="{{route('admin.course.edit', encrypt($cos->id))}}" class="edit">Edit Course</a>
                            <a href="{{route('admin.course.details', encrypt($cos->id))}}" class="view">View Course</a>
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