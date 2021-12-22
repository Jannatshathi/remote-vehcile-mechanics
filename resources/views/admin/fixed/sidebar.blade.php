<div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{route('home')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          {{-- <li class="nav-item ">
            <a class="nav-link" href="{{url('/admin')}}">
              <i class="material-icons">person</i>
              <p>Admin</p>
            </a>
          </li> --}}
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.service.type')}}">
              <i class="material-icons">content_paste</i>
              <p>Service Type</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.service.form')}}">
              <i class="material-icons">content_paste</i>
              <p>service</p>
            </a>
          </li>

          
         <!-- <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">person</i>
              <p>User</p>
            </a>
          </li>-->
          
          <!--content(typography)--> 

          <!--content(icon)--> 
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.customer.list')}}">
              <i class="material-icons">person</i>
              <p>customer</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.request.list')}}">
              <i class="material-icons">content_paste</i>
              <p>Request</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.vehcile')}}">
              <i class="material-icons">content_paste</i>
              <p>Vehcile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.mechanics.list')}}">
              <i class="material-icons">person</i>
              <p>Mechanics</p>
            </a>
          </li>
          
          {{-- <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.service.category')}}">
              <i class="material-icons">content_paste</i>
              <p>category</p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.user.list')}}">
                <span data-feather="file"></span>
                User list
            </a>
        </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.deposite')}}">
              <i class="material-icons">content_paste</i>
              <p>Deposite</p>
            </a>
          </li>

          {{-- <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>Feedback</p>
            </a>
          </li> --}}

          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.report')}}">
              <i class="material-icons">content_paste</i>
              <p>Report</p>
            </a>
          </li>

          {{-- <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.user.list')}}">
              <i class="material-icons">user list</i>
              <p>Report</p>
            </a>
          </li> --}}
          
        </ul>
      </div>