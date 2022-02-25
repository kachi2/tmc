  @extends('layouts.app')
  @section('content')
  @include('partials.adminbar')

 <section id="categories-content" class="categories-content">
        <div class="container">
            <div class="row">
    
                <div class="col-md-9 col-md-push-3">
                    <div class="content grid">
                        <div class="row">
                            <!-- ITEM -->

                            @foreach ($courses as $cos )
                              <div class="col-sm-6 col-md-4">
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
                              Views:{{$cos->views}} | Enrollment: {{count($cos->enrollment($cos->id))}}
                            </div>
                            

                        </div>

                        <div class="edit-view">
                            <a href="{{route('admin.course.edit', encrypt($cos->id))}}" class="edit">Edit Course</a>
                            <a href="{{route('admin.course.details', encrypt($cos->id))}}" class="view">View Course</a>
                        </div>
                    </div>
                            </div>  
                            @endforeach
                            
                          
    
                            
                        </div>
                    </div>
                </div>

                <!-- SIDEBAR CATEGORIES -->
                <div class="col-md-3 col-md-pull-9">
                    <aside class="sidebar-categories">
                        <div class="inner">
    
                            <!-- WIDGET TOP -->

                            <div class="widget">
                                <ul class="list-style-block">
                                 
                                @foreach ($category as $cat )
                                       <li><a href="{{route('admin.category', encrypt($cat->id))}}">{{$cat->name}}</a></li>
                                @endforeach 
                                </ul>
                            </div>
                            <!-- END / WIDGET TOP -->
    
                         
                        </div>
                    </aside>
                </div>
                <!-- END / SIDEBAR CATEGORIES -->
    
            </div>
        </div>
    </section>











  @endsection