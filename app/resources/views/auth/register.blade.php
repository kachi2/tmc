@extends('layouts.app')
@section('content')
    <!-- LOGIN -->
    <section id="login-content" class="login-content">
        <div class="awe-parallax bg-login-content"></div>
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="row">
                <!-- FORM -->
                <div class="col-xs-12 col-lg-4 pull-right">
                    <div class="form-login">
                        <form action="{{route('register')}}" method="post">
                        @csrf
                            <h2 class="text-uppercase">Register</h2>
                             <div class="form-email">
                                <input type="text"  value="{{old('name')}}" class="@error('name') is-invalid @enderror" name="name" placeholder="name">
                                @error('name')
                                <span class="alert-danger" role="alert">
                                <small>{{$message}}</small>
                                </span>
                                @enderror
                            </div>
                            <div class="form-email">
                                <input type="text" value="{{old('email')}}" class="@error('email') is-invalid @enderror" name="email" placeholder="Email">
                                @error('email')
                                <span class="alert-danger" role="alert">
                                <small>{{$message}}</small>
                                </span>
                                @enderror
                            </div>
                            <div class="form-password">
                                <input type="password"  class="@error('email') is-invalid @enderror"  name="password" placeholder="Password">
                                @error('password')
                                <span class="alert-danger" role="alert">
                                <small>{{$message}}</small>
                                </span>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="check">
                               
                                <a href="">Forget password?</a>
                            </div>
                            <div class="form-submit-1">
                                <input type="submit" value="Sign In" class="mc-btn btn-style-1">
                            </div>
                            <div class="link">
                                <a href="{{route('login')}}">
                                    <i class="icon md-arrow-right"></i>Already have an account ? Login
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END / FORM -->
                <div class="image">
                    <img src="images/homeslider/img-thumb.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- END / LOGIN -->
    
@endsection