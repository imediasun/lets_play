@extends('layouts.app')

@section('content')



    <section id="wrapper" class="login-register login-sidebar"  style="background-image:url(../assets/images/background/login-register.jpg);">
        <div class="login-box card">
            <div class="card-block">
                <form class="form-horizontal form-material" id="loginform" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <a href="javascript:void(0)" class="text-center db"><img src="/assets/images/logo-icon.png" alt="Home" /><br/><img src="/assets/images/logo-text.png" alt="Home" /></a>
                    <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account and enjoy</small>





                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} m-t-20">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>






                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="email" value="{{ old('email') }}" required placeholder="Email">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>



                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>






                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password_confirmation" required placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Already have an account? <a href="{{ route('login') }}" class="text-info m-l-5"><b>Sign In</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
























@endsection
