@extends('layouts.layout-dashboard')

@section('title','Leave | Dashboard')

@section('css_contents','css/dashboard.css')


@section("dashboard-content")

<div class="wrapper ">
  <div class="sidebar" data-color="purple" data-background-color="black" data-image="img/sidebar.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="https://3hird-k.github.io/web-sys-project-edition1/" class="simple-text logo-normal">
        OVERFLOW VS
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('emp_data') }}">
            <i class="material-icons">group_add</i>
            <p>Add Employee</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('all_emp_data') }}">
            <i class="material-icons">content_paste</i>
            <p>Employees</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('department') }}">
            <i class="material-icons">store</i>
            <p>Departments</p>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('leave') }}">
            <i class="material-icons">logout</i>
            <p>Leave</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('payroll') }}">
            <i class="material-icons">credit_card</i>
            <p>Payroll</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('account-modify') }}">
            <i class="material-icons">person</i>
            <p>Your Account</p>
          </a>
        </li>
      </ul>
    </div>
  </div>


  <!-- Edit Supervisor -->
  <!-- <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header card-header-info">
          <h4 class="card-title">Edit Performance Coach</h4>
          <p class="card-category">This is the field for editing coach data.</p>
        </div>
        <div class="card-body">

          <form action="{{ route('supervisor.update', ['id' => $supervisor->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') 

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">First Name</label>
                  <input type="text" class="form-control" name="firstname" value="{{ $supervisor->firstname }}" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Last Name</label>
                  <input type="text" class="form-control" name="lastname" value="{{ $supervisor->lastname }}" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Handled Position/s</label>
                  <input type="text" class="form-control" name="position" value="{{ $supervisor->position }}" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Supervisor (not required)</label>
                  <input type="text" class="form-control" name="Supervisor" value="{{ $supervisor->Supervisor }}">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Contact #</label>
                  <input type="tel" class="form-control" pattern="09[0-9]{9}" name="contact" value="{{ $supervisor->contact }}" required>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Address</label>
                  <input type="text" class="form-control" name="address" value="{{ $supervisor->address }}" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <label for="upload_photo">Upload Profile</label>
                <input type="file" id="upload_photo" class="" name="supervisor-profile">
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-12">
                @if (Session::has('success'))
                <span class="alert alert-success">{{ Session::get('success') }}</span>
                @endif
                @if (Session::has('fail'))
                <span class="alert alert-danger">{{ Session::get('fail') }}</span>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                  <p>{{ $error }}</p>
                  @endforeach
                </div>
                @endif
              </div>
            </div>

            <button type="submit" class="btn btn-success pull-right">Update Coach</button>
          </form>

        </div>
      </div>
    </div>
  </div>
 -->

  @endsection