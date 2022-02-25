@extends('layouts.app')
@section('content')
@include('partials.adminbar')

  <section class="profile">
        <div class="container">
            <h3 class="md black">Profile</h3>
            <div class="row">
                <div class="col-md-9">
                    <div class="avatar-acount">
                          
                        <div class="info-acount">
                            <h3 class="md black">{{$profile->name}}</h3>
                            <p>Email: {{$profile->email}}</p>
                            <div class="security">
                                <div class="tittle-security">
                                    <h5>Password</h5>
                                    <input type="password" placeholder="Current password">
                                    <input type="password" placeholder="New password">
                                </div>
                            </div>
                        </div>
                        <div class="input-save">   
                            <input type="submit" value="Update Password" class="mc-btn btn-style-1">
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </section>

@endsection