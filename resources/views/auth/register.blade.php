@extends('layouts.layout')
@section('title','Register | OHO')
@section('css_content','css/register.css')

@section('content')
<div class="wrapper">
    <div class="container main">
        <div class="row row_register">
            <div id="side-image" class="col-md-6 side-image animate-in">
                <div class="text">
                    <p>HUMAN RESOURCE MANAGEMENT SYSTEM</p>
                </div>
            </div>

            <div id="right" class="col-md-6 right animate-in">
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="input-box">
                        <header class="h2">Register Account</header>

                        <div class="input-field">
                            <input type="text" class="input" id="name" required autocomplete="off" name="name" value="{{ old('name') }}">
                            <label for="name">Name:</label>
                        </div>

                        <div class="input-field">
                            <input type="email" class="input" id="email" required autocomplete="on" name="email" value="{{ old('email') }}">
                            <label for="email">Email:</label>
                        </div>

                        <div class="input-field">
                            <input type="text" class="input" id="username" required autocomplete="off" name="username" value="{{ old('username') }}">
                            <label for="username">Username:</label>
                        </div>

                        <div class="input-field">
                            <input type="password" class="input" id="password" required name="password">
                            <label for="password">Password:</label>
                        </div>

                        <div class="input-field">
                            <input type="password" class="input" id="password_confirmation" required name="password_confirmation">
                            <label for="password_confirmation">Confirm Password:</label>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger alert-sm">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success alert-sm">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="input-field">
                            <button type="submit" class="submit">Register Account</button>
                        </div>

                        <div class="signin">
                            <span>Administrator privileged, <a href="{{ route('logout') }}" id="admin-link">Log-out</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('js_content','js/register_animate.js')

@endsection
