@extends('layouts.layout')
@section('title','Admin | OHO')
@section('css_content','css/register.css')

@section('content')
<div class="wrapper">
    <div class="container main">
        <div class="row">
            <div id="right" class="col-md-6 right animate-in">
                <form action="{{ route('admin') }}" method="POST">
                    @csrf 
                    @method('POST')
                    
                    <div class="input-box">
                        <header class="h2">Administrator</header>
                        <div class="input-field">
                            <input type="text" class="input" id="username" required name="username">
                            <label for="username">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" required  name="password">
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <button type="submit" class="submit">Login</button>
                        </div>

                        @if (session('error'))
                            <div class="alert alert-danger mt-3">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="signin">
                            <span>Already have an account? <a href="{{ route('login') }}" id="admin-link">Login</a></span>
                        </div>
                    </div>
                </form>
            </div>
            <div id="side-image" class="col-md-6 side-image animate-in">
                <div class="text">
                    <p>HUMAN RESOURCE MANAGEMENT SYSTEM</p>
                </div>
            </div>
        </div>
    </div>
</div>


@section('js_content','js/register_animate.js')

@endsection
