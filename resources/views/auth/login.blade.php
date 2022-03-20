@extends('layouts.doccure.app')

@section('content')

<!-- Main Wrapper -->
<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="{{ URL::to('') }}/backend/assets/img/facebook.png" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Login</h1>
                        <p class="account-subtitle">Access to our dashboard</p>
                        
                        <!-- Form -->
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input name="email" class="form-control" type="text" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input name="password" class="form-control" type="text" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                            </div>
                        </form>
                        <!-- /Form -->
                       
                        
                        
                        <div class="text-center dont-have">Don’t have an account? <a href="{{ route('register') }}">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Main Wrapper -->

@endsection






