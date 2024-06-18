@extends('layouts.layout-dashboard')

@section('title','Create Employee')


@section('css-content', '')
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
        <li class="nav-item active">
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="javascript:void(0)">Registration of Employees</a>
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
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Register Employee</h4>
                <p class="card-category">Fill all the required fields to create new employee.</p>
              </div>
              <div class="card-body">

                <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('POST')

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">First Name</label>
                        <input type="text" class="form-control" name="fname">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Last Name</label>
                        <input type="text" class="form-control" name="lname">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Position</label>
                        <input type="text" class="form-control" name="position">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Contact #</label>
                        <input type="tel" class="form-control" pattern="09[0-9]{9}" name="contact">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Address</label>
                        <input type="text" class="form-control" name="address">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Status</label>
                        <input type="text" class="form-control" name="status">
                      </div>
                    </div>




                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-8">
                            <input type="text" class="form-control w-100" name="supervisor" id="supervisorInput" placeholder="Select Supervisor" disabled>
                          </div>
                          <div class="col-md-4">
                            <div class="nav-item dropdown">

                              <button type="button" class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" id="supervisorDropdown">
                                <span class="visually-hidden"><i class="material-icons">person</i></span>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="supervisorDropdown">
                                @if ($supervisors->count() > 0)
                                @foreach ($supervisors as $supervisor_item)
                                <a class="dropdown-item" href="javascript:void(0)" onclick="selectSupervisor('{{ $supervisor_item->firstname . ',' . $supervisor_item->lastname }}')" name="Supervisor">{{ $supervisor_item->firstname . ' ' . $supervisor_item->lastname }}</a>
                                @endforeach
                                @else
                                <a href="javascript:void(0)" class="dropdown-item" disabled>No Supervisors</a>
                                @endif
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>


                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="bmd-label-floating">Date Hired:</label>
                        <input type="date" placeholder="dd/mm/yyyy" class="form-control text-gray text-center fs-6" name="date_hired">
                      </div>
                    </div>


                  </div>
                  <div class="row my-4">
                    <!-- <div class="col-md-12">
                      <label for="upload_photo"><i class="material-icons">person</i></label>
                      <input type="file" id="upload_photo" class="" name="employee-profile" required>
                    </div> -->
                    <div class="col-md-12 d-flex align-items-center">
                      <div>
                        <label for="upload_photo" class="btn btn-primary btn-sm">
                          <i class="material-icons">image</i>
                        </label>
                      </div>
                      <div class="ml-3">
                        <input type="file" id="upload_photo" class="form-control-file" name="employee-profile" required style="display: none;">
                        <label id="file-name" class="form-label text-muted">No file chosen</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About the Employee</label>
                        <div class="form-group">
                          <label class="bmd-label-floating"> Important Information or notes on this employee</label>
                          <textarea class="form-control" rows="3" name="description"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                      @if (Session::has('approved'))
                      <span class="alert alert-success mt-5">{{ Session::get('approved') }}</span>
                      @endif
                      @if (Session::has('failed'))
                      <span class="alert alert-danger mt-5">{{ Session::get('failed') }}</span>
                      @endif

                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary pull-right">Register Employee</button>


                </form>
              </div>


            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile">
              <div class="card-avatar">
                <a href="https://www.facebook.com/donnajane.delfin">
                  <img class="img" src="img/profiles/ceo.jpg" />
                </a>
              </div>
              <div class="card-body">
                <h6 class="card-category">CEO / Owner </h6>
                <h4 class="card-title">Donna Jane Rojo</h4>
                <p class="card-description">
                  Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                </p>
                <a href="https://www.facebook.com/donnajane.delfin" class="btn btn-primary btn-round">Follow</a>
              </div>
            </div>
          </div>
        </div>


        <!-- Register Supervisor -->
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-success">
                <h4 class="card-title">Register Performance Coach</h4>
                <p class="card-category">Fill all the required fields to create new Coach.</p>
              </div>
              <div class="card-body">

                <form action="{{ route('supervisor.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('POST')
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">First Name</label>
                        <input type="text" class="form-control" name="firstname" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Last Name</label>
                        <input type="text" class="form-control" name="lastname" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Handled Position/s</label>
                        <input type="text" class="form-control" name="position" required>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Supervisor(not required)</label>
                        <input type="text" class="form-control" name="Supervisor" disabled>
                      </div>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Contact #</label>
                        <input type="tel" class="form-control" pattern="09[0-9]{9}" name="contact" required>
                      </div>
                    </div>

                    <div class="row col-md-6">
                      <div class="col-md-8">
                        <input type="text" class="form-control w-100" name="department" placeholder="Select Department" id="departmentInput" disabled>
                      </div>
                      <div class="col-md-2 align-self-end">
                        <div class="nav-item dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" id="supervisorDropdown">
                            <span class="visually-hidden"><i class="material-icons">store</i></span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="supervisorDropdown">
                            @if ($departments->count() > 0)
                            @foreach ($departments as $department)
                            <a class="dropdown-item" href="javascript:void(0)" onclick="selectDepartment('{{ $department->department_name }}')" name="department">{{ $department->department_name }}</a>
                            @endforeach
                            @else
                            <a href="javascript:void(0)" class="dropdown-item" disabled>No Departments</a>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>




                  </div>


                  <div class="row mb-3">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Address</label>
                        <input type="text" class="form-control" name="address" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <!-- <div class="col-md-12">
                      <label for="upload_photo">Upload Profile</label>
                      <input type="file" id="upload_photo" class="" name="supervisor-profile" required>
                    </div> -->

                    <div class="col-md-12 d-flex align-items-center">
                      <div>
                        <label for="upload_photos" class="btn btn-success btn-sm">
                          <i class="material-icons">image</i>
                        </label>
                      </div>
                      <div class="ml-3">
                        <input type="file" id="upload_photos" class="form-control-file" name="supervisor-profile" required style="display: none;">
                        <label id="file-names" class="form-label text-muted">No file chosen</label>
                      </div>
                    </div>

                    <div class="col-md-12 d-flex justify-content-center">
                      @if (Session::has('success'))
                      <span class="alert alert-success mt-5">{{ Session::get('success')  }}</span>
                      @endif
                      @if (Session::has('fail'))
                      <span class="alert alert-danger mt-5">{{ Session::get('fail')  }}</span>

                      @endif

                    </div>

                  </div>



                  <button type="submit" class="btn btn-success pull-right">Register Coach</button>
                  <!-- <div class="clearfix"></div> -->
                </form>





              </div>
            </div>
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




<script>
  // script for the supervisor dropdown
  function selectSupervisor(name) {
    const [firstName, lastName] = name.split(',');
    document.getElementById('supervisorInput').value = firstName + ' ' + lastName;
  }


  function selectDepartment(name) {
    const deparment_name = name;
    document.getElementById('departmentInput').value = deparment_name;
  }

  // get photo upload location url
  document.getElementById('upload_photo').addEventListener('change', function() {
    var input = this;
    var label = document.getElementById('file-name');
    if (input.files.length > 0) {
      label.textContent = input.files[0].name;
    } else {
      label.textContent = 'No file chosen';
    }
  });
  document.getElementById('upload_photos').addEventListener('change', function() {
    var input = this;
    var label = document.getElementById('file-names');
    if (input.files.length > 0) {
      label.textContent = input.files[0].name;
    } else {
      label.textContent = 'No file chosen';
    }
  });
</script>


@endsection