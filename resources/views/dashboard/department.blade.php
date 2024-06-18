@extends('layouts.layout-dashboard')

@section('title','Departments | Dashboard')

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
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('department') }}">
            <i class="material-icons">store</i>
            <p>Departments</p>
          </a>
        </li>
        <li class="nav-item">
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


  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="javascript:void(0)">List of Employees</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">

          <ul class="navbar-nav">
            <!-- <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)">
                    <i class="material-icons">dashboard</i>
                    <p class="d-lg-none d-md-block">
                      Stats
                    </p>
                  </a>
                </li> -->

            <li class="nav-item dropdown">
              <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">notifications</i>
                <span class="notification">5</span>
                <p class="d-lg-none d-md-block">
                  Some Actions
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                <a class="dropdown-item" href="javascript:void(0)">Another One</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="javascript:void(0)" id="hruserdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">
                  Account
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="hruserdropdown">
                <a class="dropdown-item" href="{{ route('account-modify') }}"><i class="material-icons">manage_accounts</i>My Account</a>
                <a class="dropdown-item" href="{{ route('logout.dashboard') }}"><i class="material-icons">logout</i>Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->


    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header card-header-success">
                <h4 class="card-title">Register New Department</h4>
                <p class="card-category">Fill all the required fields to create new Department.</p>
              </div>
              <div class="card-body">

                <form action="{{ route('department.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('POST')
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Department Name</label>
                        <input type="text" class="form-control" name="department_name" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Description</label>
                        <input type="textarea" class="form-control" name="description" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">

                    <div class="col-md-12 d-flex justify-content-center">
                      @if (Session::has('success'))
                      <span class="alert alert-success mt-5">{{ Session::get('success')  }}</span>
                      @endif
                      @if (Session::has('fail'))
                      <span class="alert alert-danger mt-5">{{ Session::get('fail')  }}</span>

                      @endif

                    </div>

                  </div>



                  <button type="submit" class="btn btn-success pull-right"><i class="material-icons">add</i>Add Department</button>
              </div>


              <!-- <div class="clearfix"></div> -->
              </form>





            </div>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Departments </h4>
              <p class="card-category">Updated departments <span id="current-date"></span> </p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Department Name
                    </th>
                    <th>
                      # of Employees
                    </th>
                    <th>
                      Description
                    </th>
                    <th>
                      View / Delete
                    </th>
                  </thead>
                  <tbody>

                    @if (count($departments) > 0)

                    @foreach ($departments as $department)

                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $department->department_name }}</td>
                      <td>5</td>
                      <td>{{ $department->description }}</td>
                      <td>
                        <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editEmployeeModal{{ $department->id }}">Update</a>
                        <a href="/deleteDeparment/{{ $department->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                      </td>
                    </tr>

                    @endforeach
                    @else
                    <tr>
                      <td colspan="7" class="text-center">No Data Found!</td>
                    </tr>
                    @endif

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="container-fluid">
            <nav class="float-left">
              <ul>
                <li>
                  <a href="https://3hird-k.github.io/web-sys-project-edition1/">
                    Oveflow Unofficial Website
                  </a>
                </li>
                <li>
                  <a href="https://3hird-k.github.io/web-sys-project-edition1/#about">
                    About Us
                  </a>
                </li>
                <li>
                  <a href="https://3hird-k.github.io/web-sys-project-edition1/#blog">
                    Blog
                  </a>
                </li>
                <li>
                  <a href="https://3hird-k.github.io/web-sys-project-edition1/#services">
                    Services
                  </a>
                </li>
              </ul>
            </nav>
            <div class="copyright float-right" id="date">
              , made with <i class="material-icons">favorite</i> by
              <a href="https://3hird-k.github.io/web-sys-project-edition1/" target="_blank">VS</a> IT Department.
            </div>
          </div>
        </footer>
        <script>
          const x = new Date().getFullYear();
          let date = document.getElementById('date');
          date.innerHTML = '&copy; ' + x + date.innerHTML;
        </script>
      </div>
    </div>

    <!-- date time Access js -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        function getFormattedDate(date) {
          const months = [
            "January", "February", "March", "April", "May", "June", "July",
            "August", "September", "October", "November", "December"
          ];

          const day = String(date.getDate()).padStart(2, '0');
          const month = months[date.getMonth()];
          const year = date.getFullYear();

          return ' ' + month + ' ' + day + ', ' + year;
        }
        const today = new Date();

        const formattedDate = getFormattedDate(today);

        document.getElementById('current-date').innerText = formattedDate;
      });
    </script>


    @endsection