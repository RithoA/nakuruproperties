@extends('layouts.app')

@section('content')
<div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                
                    <div class="card card-signup">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                            <div class="header header-primary text-center">
                                <h4 class="card-title">Reset Password</h4>
                            </div>
                            <div class="card-content">
                            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <input id="email" placeholder="Email Address.." type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                   @endif
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="footer text-center">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
