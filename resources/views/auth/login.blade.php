@extends('layouts.app')

@section('content')
<div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="card card-signup">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                            <div class="header header-primary text-center">
                                <h4 class="card-title">Log in</h4>
                                <!-- <div class="social-line">
                                    <a href="#pablo" class="btn btn-just-icon btn-simple">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div> -->
                            </div><!-- 
                            <p class="description text-center">Or use your google account</p> -->
                            <div class="card-content">
                            
                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <input class="form-control" type="email" name="email" value="{{ old('email') }}"  placeholder=" Email..." required>
                                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                    <input class="form-control" id="password" type="password" placeholder=" Password..."name="password" required/>
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <!-- <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div> -->
                            </div>
                            <div class="footer text-center">
                                <a class="btn btn-primary btn-simple btn-wd btn-lg"><button type="submit" class="btn btn-primary">
                                    Login
                                </button></a>
                                </div>
                            <div class="text-center" style="padding-bottom: 20px">
                                <a class="text-info" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
