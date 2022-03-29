@extends('layouts.app')
@section('content')
@include('partials.topbar')
   <section id="course-concern" class="course-concern">
        <div class="container">
            
            <div class="table-asignment">

                <ul class="nav-tabs" role="tablist">
                    <li class="active"><a href="#mysubmissions" role="tab" data-toggle="tab">Students Enrollment</a></li>
                    
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- MY SUBMISSIONS -->
                    <div class="tab-pane fade in active" id="mysubmissions">
                        <div class="table-wrap">
                            <!-- TABLE HEAD -->
                            <div class="table-head">
                                <div class="total-subm"> Name</div>
                                <div class="total-subm">Email</div>
                                <div class="total-subm">Phone</div>
                                <div class="total-subm">Address</div>
                                 <div class="total-subm"> Trainees</div>
                                       <div class="total-subm">Created At</div>
                                
                            </div>
                            <!-- END / TABLE HEAD -->

                            <!-- TABLE BODY -->
                            <div class="table-body">
                                <!-- TABLE ITEM -->
                                @foreach ($enrollment  as $enrol)
                                     <div class="table-item">
                                    <div class="thead">
                                        <div class="total-subm"><a href="#">{{$enrol->name}}</a></div>
                                        <div class="total-subm">{{$enrol->email}}</div>
                                           <div class="total-subm">{{$enrol->phone}}</div>
                                        <div class="total-subm">{{$enrol->address. ' '.$enrol->state}}</div>
                                           <div class="total-subm">{{$enrol->candidates}}</div>
                                               <div class="total-subm">{{$enrol->created_at}}</div> 
                                        
                                    </div>

                                    <div class="tbody">
                                        <!-- ITEM -->
                                        <div class="item">
                                            <div class="submissions" style="color:darkblue"><a href="#">{{$enrol->course->name}}</a></div>
                                            <div class="submissions" style="color:darkblue">{{$enrol->course->category->name}}</div>
                                            
                                        </div>
                                         

                                        <!-- END / ITEM -->

                                    </div>
                                </div>
                                @endforeach
                               
                                <!-- END / TABLE ITEM -->

                              
                                <!-- END / TABLE ITEM -->
                                
                            </div>
                            <!-- END / TABLE BODY -->
                        </div>

                    </div>
                    <!-- END / MY SUBMISSIONS -->

                    
                    <!-- END / MY SUBMISSIONS -->

                </div>

            </div>
        </div>
    </section>

@endsection