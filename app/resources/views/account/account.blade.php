@extends('layouts.app')
@section('content')
@include('partials.topbar')
   <section id="course-concern" class="course-concern">
        <div class="container">
            
            <div class="table-asignment">

                <ul class="nav-tabs" role="tablist">
                    <li class="active"><a href="#mysubmissions" role="tab" data-toggle="tab">My Courses</a></li>
                    
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- MY SUBMISSIONS -->
                    <div class="tab-pane fade in active" id="mysubmissions">
                        <div class="table-wrap">
                            <!-- TABLE HEAD -->
                            <div class="table-head" style="color:#000">
                                <div class="total-subm">Course </div>
                                <div class="total-subm">No of Trainee</div>
                                <div class="total-subm">Course Price</div>
                                <div class="total-subm">Total Price</div>
                                 <div class="total-subm">Status</div>
                                       <div class="total-subm">Paid At</div>
                            </div>
                            <!-- END / TABLE HEAD -->

                            <!-- TABLE BODY -->
                            <div class="table-body">
                                <!-- TABLE ITEM -->
                                @if(count($enrollment) > 0)
                                @foreach ($enrollment  as $enrol)
                                     <div class="table-item" style="background:#fff">
                                    <div class="tbody">
                                        <div class="total-subm"><a href="#">{{$enrol->course->name}}</a></div>
                                        <div class="total-subm">{{$enrol->candidates}}</div>
                                           <div class="total-subm">₦{{number_format($enrol->course->discount)}}</div>
                                        <div class="total-subm">₦{{number_format($enrol->course->discount * $enrol->candidates)}} </div>
                                           <div class="total-subm">@if($enrol->is_paid == 1) <span class="btn btn-success">Paid</span> @else <span class="btn-outline-warning"> pending</span> @endif</div>
                                               <div class="total-subm" > @if($enrol->is_paid == 1) {{$enrol->paid_date}} @else <a href="{{route('users.course.pay',encrypt($enrol->id))}}" style="color:#fff" target="_blank" class="btn btn-primary"> Pay Now </a> @endif</div> 
                                    </div>

                                </div>
                                @endforeach
                                @else
                                
                                    <div class="table-item">
                                    <div class="tbody">
                                    </div>

                                </div>
                                @endif
                               
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