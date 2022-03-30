@extends('layouts.app')
@section('content')
<!-- SUB BANNER -->
    <section class="sub-banner sub-banner-course">
        <div class="awe-static bg-sub-banner-course"></div>
        <div class="container">
            <div class="sub-banner-content">
                <h2 class="text-center">{{$enrol->course->name}}</h2>
            </div>
        </div>
    </section>

    <!-- COURSE -->
    <form action="{{route('payment.confirmed', encrypt($enrol->id))}}" method="post" id="form1"> 
@csrf
    <section class="course-top">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="sidebar-course-intro">
                        <div class="breadcrumb">
                            <a href="#">Home</a> / 
                            <a href="#">Course</a> / 
                            {{$enrol->course->name}}
                        </div>   
                        <div class="video-course-intro">
                            <div class="inner">
                                <div class="video-place">
                                    <div class="img-thumb">
                                        <img src="images/thumb-intro.jpg" alt="">
                                    </div>
                                </div>
                                 <div class="image-heading">
                                    <img src="{{asset('/frontend/images/blog/'.$enrol->course->cover_image)}}" alt="">
                                </div>
                            </div>
                            <div style="padding-bottom:20px"></div>
                            <div class="price">
                                 N{{number_format($enrol->course->discount,2)}}
                             </div>
                             <form>
                            <script src="https://checkout.flutterwave.com/v3.js"></script>
                            <button type="button"  onClick="makePayment()" id="btnsubmit2" class="btn btn-primary btn-lg w-100">Pay Now</button>
                            </form>
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
                                <p>{!! $enrol->course->description !!}</p>
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
                                                <p>{!! $enrol->course->outline !!}</p>  
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
                                                <p>{!! $enrol->course->duration !!}</p>  
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
    </form>
    <!-- END / COURSE TOP -->

    

    

@endsection
@section('scripts')
<script>

let _token = {!! json_encode(config('app.FLUTTERWAVE_KEY')) !!};
let email = {!! json_encode($email) !!};
let phone = {!! json_encode('0802783737') !!};
let name = {!! json_encode($name)!!};
let total_pay =  {!! json_encode($total)!!};

  function makePayment() {
    FlutterwaveCheckout({
      public_key: _token,
      tx_ref: "TMC"+Math.floor((Math.random() * 1000000) + 1),
      amount: 1000,
      currency: "NGN",
      country: "NG",
      payment_options: "card, ussd",
     // redirect_url: // specified redirect URL
       // https://callbacks.piedpiper.com/flutterwave.aspx?ismobile=34",
      meta: {
        consumer_id: 1,
        consumer_mac: "92a3-912ba-1192a",
        purpose: "Payment for Courses",
        
      },
      customer: {
        email: email,
        phone_number: phone,
        name: name,
      },
      
       callback: function (response) {
          var trx_id = response.transaction_id;
           console.log(response);
          $.ajax({
              url: 'https://dev.tmcinstitute.com/users/confirm/payment/'+trx_id,
              method: 'get',
              success: function (response) {
                // console.log(response);
                // the transaction status is in response.data.status
                var data = $.parseJSON(response);
                console.log(data);
                var iamount = parseFloat(data.data.amount);
                if(data.data.status == 'successful' ){
                        $('#form1').submit(); 
                }
            },
      });
      },
      onclose: function() {
        // close modal
      },
      customizations: {
        title: "TMC Institue",
        description: "Payment for Courses",
       logo: "https://dev.tmcinstitute.com/frontend/images/logo.jpg",
      },
    });
  };
  
</script>

@endsection