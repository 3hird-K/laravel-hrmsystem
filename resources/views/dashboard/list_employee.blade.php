@extends('layouts.layout-dashboard')

@section('title','Employees')
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
        <li class="nav-item active">
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
          <!-- Employee Profile Section -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Employees Profile</h4>
                <p class="card-category">Updated employees data as of <span id="current-date"></span></p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary">
                      <tr>
                        <th>ID</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Contact</th>
                        <th>Department</th>
                        <th>View / Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if (count($employees) > 0)
                      @foreach ($employees as $employee_item)
                      <tr class="py-5">
                        <td>{{ $loop->iteration }}</td>
                        <td class="py-2"><img src="{{ $employee_item->image }}" alt="Profile" class="rounded" height="50px" width="50px"></td>
                        <td>{{ $employee_item->fname . ' ' . $employee_item->lname }}</td>
                        <td>{{ $employee_item->position }}</td>
                        <td>+63{{ $employee_item->contact }}</td>
                        <td>{{ count($employees) }}</td>
                        <td>
                          <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editEmployeeModal{{ $employee_item->id }}">Update</a>
                          <a href="/deletes/{{ $employee_item->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                          <!-- Edit Employee Modal -->
                          <div class="modal fade" id="editEmployeeModal{{ $employee_item->id }}" tabindex="-1" aria-labelledby="editEmployeeModalLabel{{ $employee_item->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title" id="editEmployeeModalLabel{{ $employee_item->id }}">Edit Employee</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <!-- Add your edit employee form here -->
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
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

          <!-- Supervisor Profile Section -->
          <div class="row">


          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title mt-0">Performance Coach</h4>
                <p class="card-category">Updated Direct Overseer of each Employee</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Handled Positions</th>
                        <th>Staff Overseen</th>
                        <th>More Info / Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if (count($supervisors) > 0)
                      @foreach ($supervisors as $supervisor_item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ $supervisor_item->image }}" alt="Profile" class="rounded" height="50px" width="50px"></td>
                        <td>{{ $supervisor_item->firstname . ' ' . $supervisor_item->lastname }}</td>
                        <td>{{ $supervisor_item->position }}</td>
                        <td>5</td>
                        <td>
                          <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editSupervisorModal{{ $supervisor_item->id }}">Update</a>
                          <a href="/delete/{{ $supervisor_item->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                      </tr>

                      <!-- Edit Supervisor Modal -->
                      <div class="modal fade" id="editSupervisorModal{{ $supervisor_item->id }}" tabindex="-1" aria-labelledby="editSupervisorModalLabel{{ $supervisor_item->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header bg-secondary text-white">
                              <h5 class="modal-title" id="editSupervisorModalLabel{{ $supervisor_item->id }}">Edit Supervisor</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body bg-dark">
                              <form action="{{ route('supervisor.update', $supervisor_item->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">First Name</label>
                                      <input type="text" class="form-control" name="firstname" value="{{ $supervisor_item->firstname }}">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Last Name</label>
                                      <input type="text" class="form-control" name="lastname" value="{{ $supervisor_item->lastname }}">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Handled Position/s</label>
                                      <input type="text" class="form-control" name="position" value="{{ $supervisor_item->position }}">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Contact #</label>
                                      <input type="tel" class="form-control" pattern="09[0-9]{9}" name="contact" value="{{ $supervisor_item->contact }}">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Address</label>
                                      <input type="text" class="form-control" name="address" value="{{ $supervisor_item->address }}">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <label for="upload_photo">Upload Profile</label>
                                    <input type="file" id="upload_photo" class="form-control" name="supervisor-profile" value="{{ $supervisor_item->image }}">
                                  </div>
                                  <div class="col-md-6">
                                    <img src="{{ $supervisor_item->image }}" alt="" height="100px" width="100px" class="rounded">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      @else
                      <tr>
                        <td colspan="6" class="text-center">No Data Found!</td>
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