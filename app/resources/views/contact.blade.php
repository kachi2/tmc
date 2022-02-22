@extends('layouts.app')

@section('content')

 <section class="profile-feature">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="info-author">
                <div class="image">
                    <img src="images/team-13.jpg" alt="">
                </div>    
                <div class="name-author">
                    <h2 class="big">Contact Us</h2>
                </div>     
                <div class="address-author">
                    <i class="fa fa-dashboard"></i>
                    <h3>Home/Contact-us</h3>
                </div>
            </div>
         
        </div>
    </section>

     <section id="mc-section-1"  style="padding-top:50px">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form method="post" action="{{route('contactUs')}}"> 
                                    @csrf
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
                                                <div class="meta-categories"><a href="#"></a></div>
                                                <div class="content-item">
                                                    <div class="image-author">
                                                        <img src="images/avatar-1.jpg" alt="">
                                                    </div>
                                                    <h4><a href="#"></a></h4>
                                                   
                                                </div>
                                                <div class="ft-item">
                                                    
                                                   <div class="view-info">
                                                Africa<br>
                                                   Address: 1, Adeola Adeoye Street, Ikeja, Lagos, Nigeria.<br>
                                                   Phone: 01-7001770
                                                    09153414314 <br>
                                                    Email: enquiries@tmcinstitute.com
                                                   </div>
                                                   <hr>
                                                <div class="view-info">
                                                   United kingdom<br>
                                           Address: House 24, Holborn Viaduct, London EC1A 2BN, United Kingdom.<br>
                                           phone: +44-7466588324 <br>
                                            Email: enquiries@tmcinstitute.com
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                   
                                    </div>
                                 
                                    <div class="col-md-6">
                                        <div class="form-2">
                                            <h3 class="fs-title text-capitalize">Get in touch</h3>
                                            <p> We are the leading and specialist provider of specialized corporate training including Governance, Risk & Compliance, Financial Crime, and Leadership training focused on cultivating the right attitude and skills in your teams.</p>
                                            <div class="form-firstname">
                                                <input class="form-control" type="text" name="name" placeholder="Full Name"  required>
                                            </div>
                                            <div class="form-lastname">
                                                <input class="form-control"  type="text" name="email" placeholder="Email " required/>
                                            </div>
                                            <div class="form-firstname">
                                                <input class="form-control"  type="text" name="phone" placeholder="Phone Number" required />
                                            </div>
                                            <div class="form-lastname">
                                                <textarea> Type your message
                                                </textarea>
                                            </div>
                                            
                            
                                            <div class="form-submit-1">
                                                <button type="submit"  class="mc-btn btn-style-1"> Submit </button>
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
        </section>
    </div>

@endsection


@section('scripts')
<script>
let msg = {!!  json_encode(Session::get('msg'))!!}
if(msg){

swal("Request Sent Successfully", "Your request sent successully, our team will contact you for more information");
}
</script>
@endsection