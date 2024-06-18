@extends('layouts.layout-dashboard')

@section('title','Account | Dashboard')

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
        <li class="nav-item ">
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
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('account-modify') }}">
            <i class="material-icons">person</i>
            <p>Your Account</p>
          </a>
        </li>
      </ul>
    </div>
  </div>



  @endsection