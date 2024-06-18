@extends('layouts.layout')
@section('title','Login | OHO')
@section('css_content','css/register.css')

@section('content')
<div class="wrapper">
    <div class="container main">

        <div class="row">
            <div id="side-image" class="col-md-6 side-image animate-in">
                <div class="text">
                    <p>HUMAN RESOURCE MANAGEMENT SYSTEM</p>
                </div>
            </div>

            <div id="right" class="col-md-6 right animate-in">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    @method("POST")
                    <div class="input-box">
                        <header class="h2">Login account</header>
                        <div class="input-field">
                            <input type="text" class="input" id="username" required autocomplete="off" name="username">
                            <label for="username">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" required name="password">
                            <label for="password">Password</label>
                        </div>

                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        @if($errors->any())
                        <div>
                            <strong>Error:</strong> {{ $errors->first('username') }}
                        </div>
                        @endif

                        <div class="input-field">
                            <button type="submit" class="submit">Login</button>
                        </div>
                        <div class="signin">
                            <span>Forgot Account? <a href="{{ route('admin') }}" id="admin-link">Administrator</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('js_content','js/register_animate.js')

@endsection