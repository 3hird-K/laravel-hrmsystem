  @extends('layouts.layout-dashboard')

  @section('title', 'Admin | Dashboard')

  @section('css_contents', 'css/dashboard.css')


  @section('dashboard-content')

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
      <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

      <div class="wrapper ">
          <div class="sidebar" data-color="purple" data-background-color="black" data-image="img/sidebar.jpg">
              <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Tip 2: you can also add an image using data-image tag
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                -->
              <div class="logo"><a href="https://3hird-k.github.io/web-sys-project-edition1/"
                      class="simple-text logo-normal">
                      OVERFLOW VS
                  </a></div>
              <div class="sidebar-wrapper">
                  <ul class="nav">
                      <li class="nav-item active">
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
                          <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
                      </div>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                          aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="navbar-toggler-icon icon-bar"></span>
                          <span class="navbar-toggler-icon icon-bar"></span>
                          <span class="navbar-toggler-icon icon-bar"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-end">

                          <ul class="navbar-nav">

                              <li class="nav-item dropdown">
                                  <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="material-icons">notifications</i>
                                      <span class="notification">5</span>
                                      <p class="d-lg-none d-md-block">
                                          Some Actions
                                      </p>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your
                                          email</a>
                                      <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                                      <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                                      <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                                      <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                                  </div>
                              </li>

                              <li class="nav-item dropdown">
                                  <a class="nav-link" href="javascript:void(0)" id="hruserdropdown" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false">
                                      <i class="material-icons">person</i>
                                      <p class="d-lg-none d-md-block">
                                          Account
                                      </p>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="hruserdropdown">
                                      <a class="dropdown-item" href="{{ route('account-modify') }}"><i
                                              class="material-icons">manage_accounts</i>My Account</a>
                                      <a class="dropdown-item" href="{{ route('logout.dashboard') }}"><i
                                              class="material-icons">logout</i>Logout</a>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
              </nav>
              <!-- End Navbar -->
              <div class="content">
                  <div class="container-fluid">
                      {{-- Use to count Employee --}}
                      <div class="row">

                          <div class="row col-md-12">
                              <div class="col-md-4">
                                  <div class="card card-profile">
                                      <div class="card-avatar">
                                          <a href="https://www.facebook.com/donnajane.delfin">
                                              <img class="img" src="img/profiles/donna.jpg" />
                                          </a>
                                      </div>
                                      <div class="card-body">
                                          <h6 class="card-category">CEO / Owner </h6>
                                          <h4 class="card-title">Donna Jane Rojo</h4>
                                          <p class="card-description">
                                              Don't be scared of the truth because we need to restart the human foundation
                                              in
                                              truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but
                                              the
                                              back is...
                                          </p>
                                          <a href="https://www.facebook.com/donnajane.delfin"
                                              class="btn btn-primary btn-round">Follow</a>
                                      </div>
                                  </div>
                              </div>
                              {{-- <div class="col-md-2">
                                  <div class="card card-chart">
                                      <div class="card-header card-header-success">
                                          <div class="ct-chart" id="dailySalesChart"></div>
                                      </div>
                                      <div class="card-body">
                                          <h4 class="card-title">HR Management System</h4>
                                          <p class="card-category">
                                              <span class="text-success"><i class="fa fa-long-arrow-up"></i> Overflow Home
                                                  Office </span> Monitoring
                                          </p>
                                      </div>
                                      <div class="card-footer">
                                          <div class="stats">
                                              <i class="material-icons">access_time</i> Today is : <span
                                                  id="current-date"></span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div> --}}

                              <div class="col-md-8">
                                  <div class="card card-chart">
                                      <div class="card-header card-header-success">
                                          <div class="ct-chart" id="dailySalesChart">
                                              <h4 class="card-title">Human Resource Accounts <span
                                                      class="text-white fw-bold">{{ count($hr_user) }}</span></h4>
                                              <p class="card-category">Employees administrators</p>
                                          </div>

                                      </div>
                                      <div class="card-body table-responsive">
                                          <table class="table table-hover">
                                              <thead class="text-warning">
                                                  <th>ID</th>
                                                  <th>Name</th>
                                                  <th>Email</th>
                                                  <th>Username</th>
                                                  <th>Registered on</th>
                                              </thead>
                                              <tbody>

                                                  @if (count($hr_user) > 0)

                                                      @foreach ($hr_user as $hr)
                                                          <tr>
                                                              <td>{{ $loop->iteration }}</td>
                                                              <td>{{ $hr->name }}</td>
                                                              <td>{{ $hr->email }}</td>
                                                              <td>{{ $hr->username }}</td>
                                                              <td>{{ $hr->created_at }}</td>
                                                          </tr>
                                                      @endforeach

                                                  @endif

                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>







                              <div class="col-md-6">
                                  <div class="card card-stats">
                                      <div class="card-header card-header-primary card-header-icon">
                                          <div class="card-icon">
                                              <i class="material-icons">security</i>
                                          </div>
                                          <p class="card-category text-primary">Administrator</p>
                                          <h3 class="card-title"><span
                                                  class="text-white fw-bold">{{ count($admins) }}</span>
                                              <small>Accounts</small>
                                          </h3>
                                      </div>
                                      <div class="card-footer">
                                          <div class="stats">
                                              <i class="material-icons text-primary">settings</i>Administrators
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="card card-stats">
                                      <div class="card-header card-header-warning card-header-icon">
                                          <div class="card-icon">
                                              <i class="material-icons">supervisor_account</i>
                                          </div>
                                          <p class="card-category text-warning">Supervisors</p>
                                          <h3 class="card-title"><span
                                                  class="text-white fw-bold">{{ count($supervisors) }}</span>
                                              <small>Accounts</small>
                                          </h3>
                                      </div>
                                      <div class="card-footer">
                                          <div class="stats">
                                              <i class="material-icons text-warning">supervised_user_circle</i>Enrolled
                                              Supervisors
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="card card-stats">
                                      <div class="card-header card-header-success card-header-icon">
                                          <div class="card-icon">
                                              <i class="material-icons">group_add</i>
                                          </div>
                                          <p class="card-category text-success">Employees</p>
                                          <h3 class="card-title"><span
                                                  class="text-white fw-bold">{{ count($employees) }}</span>
                                              <small>Accounts</small>
                                          </h3>
                                      </div>
                                      <div class="card-footer">
                                          <div class="stats">
                                              <i class="material-icons text-success">person</i> Employees Enrolled
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="card card-stats">
                                      <div class="card-header card-header-danger card-header-icon">
                                          <div class="card-icon">
                                              <i class="material-icons">store</i>
                                          </div>
                                          <p class="card-category text-danger">Departments</p>
                                          <h3 class="card-title"><span
                                                  class="text-white fw-bold">{{ count($departments) }}</span>
                                              <small>Dept.</small>
                                          </h3>

                                      </div>
                                      <div class="card-footer">
                                          <div class="stats">
                                              <i class="material-icons text-danger">local_offer</i> Enrolled Departments
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          {{-- Ending of Use to count Employee --}}





                          {{-- START ATTENDANCE MONITORING --}}

                          <div class="col-md-12 d-flex justify-content-center">
                              <div class="col-md-12">
                                  <div class="row">

                                      <form action=" {{ route('attendance.store') }}" method='POST'
                                          enctype="multipart/form-data">
                                          @csrf
                                          @method('POST')

                                          <div class="col-md-12">
                                              <div class="card card-chart">
                                                  <div class="card-header card-header-primary">
                                                      <div class="row justify-content-between">
                                                          <div class="col-md-6 d-flex align-items-center">
                                                              <i class="material-icons">event_available</i>
                                                              <h5 class="mb-0 ml-2">Attendance</h5>
                                                          </div>

                                                          <div class="col-md-6 d-flex justify-content-end">
                                                              {{-- <a class="nav-link" href="javascript:void(0)"
                                                                  id="navbarDropdownMenuLink" data-toggle="dropdown"
                                                                  aria-haspopup="true" aria-expanded="false">

                                                                  <button type="submit"
                                                                      class="btn btn-default text-white dropdown-toggle dropdown-toggle-split"
                                                                      data-bs-toggle="dropdown" aria-expanded="false">
                                                                      <span class="visually-hidden"><i
                                                                              class="material-icons">update</i>Clock
                                                                          In/Out</span>
                                                                  </button>
                                                              </a>
                                                              <div class="dropdown-menu"
                                                                  aria-labelledby="navbarDropdownMenuLink">
                                                                  <button type='submit' class="dropdown-item"
                                                                      href="javascript:void(0)"><i
                                                                          class="material-icons">login</i>Clock-in</button>

                                                                  <button type='submit' class="dropdown-item"
                                                                      href="javascript:void(0)"><i
                                                                          class="material-icons">logout</i>Clock-out</button>
                                                              </div> --}}

                                                              <a class="nav-link" href="javascript:void(0)"
                                                                  id="navbarDropdownMenuLink" data-toggle="dropdown"
                                                                  aria-haspopup="true" aria-expanded="false">
                                                                  <button type="button"
                                                                      class="btn btn-default text-white dropdown-toggle dropdown-toggle-split"
                                                                      data-bs-toggle="dropdown" aria-expanded="false">
                                                                      <span class="visually-hidden"><i
                                                                              class="material-icons">update</i>Clock
                                                                          In/Out</span>
                                                                  </button>
                                                              </a>
                                                              <div class="dropdown-menu"
                                                                  aria-labelledby="navbarDropdownMenuLink">
                                                                  <form method="POST"
                                                                      action="{{ route('attendance.store') }}"
                                                                      enctype="multipart/form-data">
                                                                      @csrf
                                                                      @method('POST')
                                                                      {{-- <div class="alert alert-danger">
                                                                          <ul>
                                                                              @foreach ($errors->all() as $error)
                                                                                  <li>{{ $error }}</li>
                                                                              @endforeach
                                                                          </ul>
                                                                          @if (Session::has('success'))
                                                                              <span
                                                                                  class="alert alert-success mt-5">{{ Session::get('success') }}</span>
                                                                          @endif
                                                                          @if (Session::has('fail'))
                                                                              <span
                                                                                  class="alert alert-danger mt-5">{{ Session::get('fail') }}</span>
                                                                          @endif

                                                                      </div> --}}
                                                                      <input type="hidden" name="employee_id"
                                                                          id="employeeReal1Input">
                                                                      <input type="hidden" name="status"
                                                                          value="Clock In">
                                                                      <input type="hidden" id="current-dates"
                                                                          name="date">
                                                                      <input type="hidden" id="current-times"
                                                                          name="time">
                                                                      <button type="submit" class="dropdown-item"><i
                                                                              class="material-icons">login</i>Clock-in</button>
                                                                  </form>

                                                                  <form method="POST"
                                                                      action="{{ route('attendance.store') }}"
                                                                      enctype="multipart/form-data">
                                                                      @csrf
                                                                      @method('POST')
                                                                      {{-- <div class="alert alert-danger">
                                                                          <ul>
                                                                              @foreach ($errors->all() as $error)
                                                                                  <li>{{ $error }}</li>
                                                                              @endforeach
                                                                          </ul>
                                                                      </div> --}}
                                                                      <input type="hidden" name="employee_id"
                                                                          id="employeeReal2Input">
                                                                      <input type="hidden" name="status"
                                                                          value="Clock Out">
                                                                      <input type="hidden" id="current-date"
                                                                          name="date">
                                                                      <input type="hidden" id="current-time"
                                                                          name="time">
                                                                      <button type="submit" class="dropdown-item"><i
                                                                              class="material-icons">logout</i>Clock-out</button>
                                                                  </form>


                                                              </div>







                                                          </div>
                                                      </div>
                                                  </div>

                                                  <div class="card-body">
                                                      <div class="row ">
                                                          <div class="col-lg-4 col-lg-12 justify-content-lg-center">
                                                              <p class="card-title fw-bold">Employee</p>
                                                              <div class="row">
                                                                  <div class="col-md-3 my-3">
                                                                      <div class="nav-item dropdown">
                                                                          <button type="button"
                                                                              class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                                                              data-bs-toggle="dropdown"
                                                                              aria-expanded="false" id="employeeDropdown">
                                                                              <span class="visually-hidden"><i
                                                                                      class="material-icons">person</i>Select
                                                                                  an Employee</span>
                                                                          </button>
                                                                          <div class="dropdown-menu"
                                                                              aria-labelledby="employeeDropdown">
                                                                              @if ($employees->count() > 0)
                                                                                  @foreach ($employees as $employee_item)
                                                                                      <a class="dropdown-item"
                                                                                          href="javascript:void(0)"
                                                                                          onclick="selectEmployee('{{ $employee_item->id }}', '{{ $employee_item->fname . ' ' . $employee_item->lname }}')">
                                                                                          {{ $employee_item->fname . ' ' . $employee_item->lname }}
                                                                                      </a>
                                                                                  @endforeach
                                                                              @else
                                                                                  <a href="javascript:void(0)"
                                                                                      class="dropdown-item" disabled>No
                                                                                      Employee Available</a>
                                                                              @endif
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-8 d-flex justify-content-end">
                                                                      <input type="text" class="form-control"
                                                                          name="employee_name" id="employeeInput"
                                                                          placeholder="Select Employee" disabled>
                                                                      <input type="hidden" name="employee_id"
                                                                          id="employeeRealInput">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-12">
                                                              <p class="card-title fw-bold">Logs</p>
                                                              <table class="table">
                                                                  <thead>
                                                                      <tr>
                                                                          <th scope="col">Employee Name:</th>
                                                                          <th scope="col">Date</th>
                                                                          <th scope="col">Status
                                                                          </th>
                                                                          <th scope="col">Time</th>
                                                                      </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                      @if (count($attendance) > 0)
                                                                          @foreach ($attendance as $clock)
                                                                              <tr>
                                                                                  <th>
                                                                                      {{-- @if ($supervisor_item->department)
                                                                                          {{ $supervisor_item->department->department_name }}
                                                                                      @endif --}}
                                                                                      @if ($clock->employee)
                                                                                          {{ $clock->employee->fname }}
                                                                                          {{ $clock->employee->lname }}
                                                                                      @endif

                                                                                  </th>
                                                                                  <th scope="row">
                                                                                      <span id="current-date"
                                                                                          name='date'>
                                                                                          {{ $clock->date }}
                                                                                      </span>
                                                                                  </th>
                                                                                  <td name='status'>
                                                                                      {{ $clock->status }}
                                                                                  </td>
                                                                                  <td id='current-time' name='time'>
                                                                                      {{ $clock->time }}
                                                                                  </td>
                                                                              </tr>
                                                                          @endforeach
                                                                      @else
                                                                          <td>Not Yet Clocked</td>
                                                                      @endif
                                                                  </tbody>
                                                              </table>
                                                          </div>
                                                      </div>
                                      </form>






                                      <div class='col-md-12 bg-primary my-4'></div>


                                      <div class="col-md-12">
                                          <table class="table">
                                              <div class="row">
                                                  <div class="col-6">
                                                      <tr>
                                                          <td>
                                                              <div class="form-check">
                                                                  <label class="form-check-label">
                                                                      <input class="form-check-input" type="checkbox"
                                                                          value="" checked>
                                                                      <span class="form-check-sign">
                                                                          <span class="check"></span>
                                                                      </span>
                                                                  </label>
                                                              </div>
                                                          </td>
                                                          <td>Mark as done after completing your Daily
                                                              Devotional.
                                                          </td>
                                                          <td>
                                                              <div class="form-check">
                                                                  <label class="form-check-label">
                                                                      <input class="form-check-input" type="checkbox"
                                                                          value="">
                                                                      <span class="form-check-sign">
                                                                          <span class="check"></span>
                                                                      </span>
                                                                  </label>
                                                              </div>
                                                          </td>
                                                          <td>Mark as attended after participating in Sunday
                                                              Service.
                                                          </td>
                                                      </tr>
                                                  </div>

                                                  <div class="col-6">
                                                      <tr>
                                                          <td>
                                                              <div class="form-check">
                                                                  <label class="form-check-label">
                                                                      <input class="form-check-input" type="checkbox"
                                                                          value="" checked>
                                                                      <span class="form-check-sign">
                                                                          <span class="check"></span>
                                                                      </span>
                                                                  </label>
                                                              </div>
                                                          </td>
                                                          <td>Mark as attended after participating in your
                                                              Cell
                                                              Group
                                                              meeting.
                                                          </td>
                                                          <td>
                                                              <div class="form-check">
                                                                  <label class="form-check-label">
                                                                      <input class="form-check-input" type="checkbox"
                                                                          value="" checked>
                                                                      <span class="form-check-sign">
                                                                          <span class="check"></span>
                                                                      </span>
                                                                  </label>
                                                              </div>
                                                          </td>
                                                          <td>Ensure proper wearing of uniform according to
                                                              color
                                                              coding.</td>
                                                      </tr>
                                                  </div>
                                          </table>
                                      </div>



                                      {{-- <div class="alert alert-danger">
                                          <ul>
                                              @foreach ($errors->all() as $error)
                                                  <li>{{ $error }}</li>
                                              @endforeach
                                          </ul>
                                      </div> --}}
                                      {{-- </div> --}}

                                      @if (Session::has('success'))
                                          <span class="alert alert-success mt-5">{{ Session::get('success') }}</span>
                                      @endif
                                      @if (Session::has('fail'))
                                          <span class="alert alert-danger mt-5">{{ Session::get('fail') }}</span>
                                      @endif

                                      <p class="card-category">Attendance Sheet : </p>

                                  </div>
                                  <div class="card-footer">
                                      <div class="stats">
                                          <i class="material-icons">edit_calendar</i><a class="text-success"
                                              data-background-color="danger" href="#">Show Team
                                              Attendance</a>
                                      </div>
                                      <div>
                                          <button type="submit" class="btn btn-primary"><i
                                                  class="material-icons">radio_button_checked</i>Record</button>
                                      </div>
                                  </div>

                              </div>
                          </div>


                      </div>
                  </div>
              </div>
              {{-- END OF ATTENDANCE MONITORING --}}


              <div class="row">
                  <div class="col-lg-6 col-md-12">
                      <div class="card">
                          <div class="card-header card-header-success">
                              <h4 class="card-title">Human Resource Accounts <span
                                      class="text-white fw-bold">{{ count($hr_user) }}</span></h4>
                              <p class="card-category">Employees administrators</p>
                          </div>
                          <div class="card-body table-responsive">
                              <table class="table table-hover">
                                  <thead class="text-warning">
                                      <th>ID</th>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Username</th>
                                      <th>Registered on</th>
                                  </thead>
                                  <tbody>

                                      @if (count($hr_user) > 0)

                                          @foreach ($hr_user as $hr)
                                              <tr>
                                                  <td>{{ $loop->iteration }}</td>
                                                  <td>{{ $hr->name }}</td>
                                                  <td>{{ $hr->email }}</td>
                                                  <td>{{ $hr->username }}</td>
                                                  <td>{{ $hr->created_at }}</td>
                                              </tr>
                                          @endforeach

                                      @endif

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>


                  <div class="col-lg-6 col-md-12">
                      <div class="card">
                          <div class="card-header card-header-tabs card-header-warning">
                              <div class="nav-tabs-navigation">
                                  <div class="nav-tabs-wrapper">
                                      <span class="nav-tabs-title">Tasks:</span>
                                      <ul class="nav nav-tabs" data-tabs="tabs">
                                          <li class="nav-item">
                                              <a class="nav-link active" href="#profile" data-toggle="tab">
                                                  <i class="material-icons">report</i> Reports
                                                  <div class="ripple-container"></div>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="#messages" data-toggle="tab">
                                                  <i class="material-icons">notifications</i> Reminders
                                                  <div class="ripple-container"></div>
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="#settings" data-toggle="tab">
                                                  <i class="material-icons">monitor</i> Daily Monitoring
                                                  <div class="ripple-container"></div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="tab-content">
                                  <div class="tab-pane active" id="profile">
                                      <table class="table">
                                          <tbody>
                                              <tr>
                                                  <td>
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input" type="checkbox"
                                                                  value="" checked>
                                                              <span class="form-check-sign">
                                                                  <span class="check"></span>
                                                              </span>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td>Sign contract for "What are conference organizers afraid
                                                      of?"
                                                  </td>
                                                  <td class="td-actions text-right">
                                                      <button type="button" rel="tooltip" title="Edit Task"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">edit</i>
                                                      </button>
                                                      <button type="button" rel="tooltip" title="Remove"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">close</i>
                                                      </button>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input" type="checkbox"
                                                                  value="">
                                                              <span class="form-check-sign">
                                                                  <span class="check"></span>
                                                              </span>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td>Lines From Great Russian Literature? Or E-mails From My
                                                      Boss?
                                                  </td>
                                                  <td class="td-actions text-right">
                                                      <button type="button" rel="tooltip" title="Edit Task"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">edit</i>
                                                      </button>
                                                      <button type="button" rel="tooltip" title="Remove"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">close</i>
                                                      </button>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input" type="checkbox"
                                                                  value="">
                                                              <span class="form-check-sign">
                                                                  <span class="check"></span>
                                                              </span>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td>Flooded: One year later, assessing what was lost and what
                                                      was
                                                      found when a ravaging rain swept through metro Detroit
                                                  </td>
                                                  <td class="td-actions text-right">
                                                      <button type="button" rel="tooltip" title="Edit Task"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">edit</i>
                                                      </button>
                                                      <button type="button" rel="tooltip" title="Remove"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">close</i>
                                                      </button>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input" type="checkbox"
                                                                  value="" checked>
                                                              <span class="form-check-sign">
                                                                  <span class="check"></span>
                                                              </span>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td>Create 4 Invisible User Experiences you Never Knew About
                                                  </td>
                                                  <td class="td-actions text-right">
                                                      <button type="button" rel="tooltip" title="Edit Task"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">edit</i>
                                                      </button>
                                                      <button type="button" rel="tooltip" title="Remove"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">close</i>
                                                      </button>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>
                                  <div class="tab-pane" id="messages">
                                      <table class="table">
                                          <tbody>
                                              <tr>
                                                  <td>
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input" type="checkbox"
                                                                  value="" checked>
                                                              <span class="form-check-sign">
                                                                  <span class="check"></span>
                                                              </span>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td>Flooded: One year later, assessing what was lost and what
                                                      was
                                                      found when a ravaging rain swept through metro Detroit
                                                  </td>
                                                  <td class="td-actions text-right">
                                                      <button type="button" rel="tooltip" title="Edit Task"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">edit</i>
                                                      </button>
                                                      <button type="button" rel="tooltip" title="Remove"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">close</i>
                                                      </button>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input" type="checkbox"
                                                                  value="">
                                                              <span class="form-check-sign">
                                                                  <span class="check"></span>
                                                              </span>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td>Sign contract for "What are conference organizers afraid
                                                      of?"
                                                  </td>
                                                  <td class="td-actions text-right">
                                                      <button type="button" rel="tooltip" title="Edit Task"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">edit</i>
                                                      </button>
                                                      <button type="button" rel="tooltip" title="Remove"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">close</i>
                                                      </button>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>
                                  <div class="tab-pane" id="settings">
                                      <table class="table">
                                          <tbody>
                                              <tr>
                                                  <td>
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input" type="checkbox"
                                                                  value="">
                                                              <span class="form-check-sign">
                                                                  <span class="check"></span>
                                                              </span>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td>Lines From Great Russian Literature? Or E-mails From My
                                                      Boss?
                                                  </td>
                                                  <td class="td-actions text-right">
                                                      <button type="button" rel="tooltip" title="Edit Task"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">edit</i>
                                                      </button>
                                                      <button type="button" rel="tooltip" title="Remove"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">close</i>
                                                      </button>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input" type="checkbox"
                                                                  value="" checked>
                                                              <span class="form-check-sign">
                                                                  <span class="check"></span>
                                                              </span>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td>Flooded: One year later, assessing what was lost and what
                                                      was
                                                      found when a ravaging rain swept through metro Detroit
                                                  </td>
                                                  <td class="td-actions text-right">
                                                      <button type="button" rel="tooltip" title="Edit Task"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">edit</i>
                                                      </button>
                                                      <button type="button" rel="tooltip" title="Remove"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">close</i>
                                                      </button>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input" type="checkbox"
                                                                  value="" checked>
                                                              <span class="form-check-sign">
                                                                  <span class="check"></span>
                                                              </span>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td>Sign contract for "What are conference organizers afraid
                                                      of?"
                                                  </td>
                                                  <td class="td-actions text-right">
                                                      <button type="button" rel="tooltip" title="Edit Task"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">edit</i>
                                                      </button>
                                                      <button type="button" rel="tooltip" title="Remove"
                                                          class="btn btn-white btn-link btn-sm">
                                                          <i class="material-icons">close</i>
                                                      </button>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
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
                  <a href="https://3hird-k.github.io/web-sys-project-edition1/" target="_blank">VS</a> IT
                  Department.
              </div>
          </div>
      </footer>
      <script>
          const x = new Date().getFullYear();
          let date = document.getElementById('date');
          date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
      </div>


      <script>
          $(document).ready(function() {
              // Javascript method's body can be found in assets/js/demos.js
              md.initDashboardPageCharts();

          });
      </script>

      <script>
          // Initialize a sample chart for HR statistics
          new Chartist.Line('#hrStatisticsChart', {
              labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
              series: [
                  [12, 17, 7, 17, 23]
              ]
          }, {
              low: 0,
              showArea: true
          });
      </script>

      <!-- date time Access js -->
      {{-- <script>
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
      <script>
          document.addEventListener('DOMContentLoaded', function() {
              function getFormattedTime(date) {
                  let hours = date.getHours();
                  const minutes = String(date.getMinutes()).padStart(2, '0');
                  const ampm = hours >= 12 ? 'PM' : 'AM';
                  hours = hours % 12;
                  hours = hours ? hours : 12; // the hour '0' should be '12'

                  return `${hours}:${minutes} ${ampm}`;
              }

              const today = new Date();
              const formattedTime = getFormattedTime(today);

              document.getElementById('current-time').innerText = formattedTime;
          });
      </script> --}}
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

                  return month + ' ' + day + ', ' + year;
              }

              function getFormattedTime(date) {
                  let hours = date.getHours();
                  const minutes = String(date.getMinutes()).padStart(2, '0');
                  const ampm = hours >= 12 ? 'PM' : 'AM';
                  hours = hours % 12;
                  hours = hours ? hours : 12; // the hour '0' should be '12'

                  return `${hours}:${minutes} ${ampm}`;
              }

              const today = new Date();
              const formattedDate = getFormattedDate(today);
              const formattedTime = getFormattedTime(today);

              document.getElementById('current-date').value = formattedDate;
              document.getElementById('current-time').value = formattedTime;
              document.getElementById('current-dates').value = formattedDate;
              document.getElementById('current-times').value = formattedTime;
          });
      </script>




      <!-- Script for Employee Selection in attendance clock in -->

      <script>
          // script for the supervisor dropdown
          function selectEmployee(name) {
              const [firstName, lastName] = name.split(',');
              document.getElementById('employeeInput').value = firstName + ' ' + lastName;
              document.getElementById('hidden_input').value = firstName;
          }
          // get photo upload location url
          // document.getElementById('upload_photo').addEventListener('change', function() {
          //   var input = this;
          //   var label = document.getElementById('file-name');
          //   if (input.files.length > 0) {
          //     label.textContent = input.files[0].name;
          //   } else {
          //     label.textContent = 'No file chosen';
          //   }
          // });
          // document.getElementById('upload_photos').addEventListener('change', function() {
          //   var input = this;
          //   var label = document.getElementById('file-names');
          //   if (input.files.length > 0) {
          //     label.textContent = input.files[0].name;
          //   } else {
          //     label.textContent = 'No file chosen';
          //   }
          // });
      </script>

      {{-- script for the attendance --}}

      <script>
          function selectEmployee(employee_id, employee_name) {
              document.getElementById('employeeInput').value = employee_name;
              document.getElementById('employeeRealInput').value = employee_id;
              document.getElementById('employeeReal1Input').value = employee_id;
              document.getElementById('employeeReal2Input').value = employee_id;
          }
      </script>

      <script>
          document.addEventListener('DOMContentLoaded', function() {
              var now = new Date();
              var date = now.toISOString().split('T')[0]; // YYYY-MM-DD format
              var time = now.toTimeString().split(' ')[0]; // HH:MM:SS format

              document.getElementById('date_now').value = date;
              document.getElementById('current-time').value = time;
          });
      </script>





  @endsection
