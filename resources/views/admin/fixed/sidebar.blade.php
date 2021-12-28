
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

          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.user.list')}}">
                <span data-feather="file"></span>
                <i class="material-icons">person</i>
                <p>User list</p>
            </a>
        </li>

        <li class="nav-item ">
          <a class="nav-link" href="{{route('admin.mechanics.list')}}">
            <i class="material-icons">person</i>
            <p>Mechanics</p>
          </a>
        </li>
        
        <li class="nav-item ">
          <a class="nav-link" href="{{route('admin.service.type.list')}}">
            <i class="material-icons">content_paste</i>
            <p>Service type</p>
          </a>
        </li>
          
          
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.service.list')}}">
              <i class="material-icons">content_paste</i>
              <p>Service</p>
            </a>
          </li>
          
          
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
            <a class="nav-link" href="{{route('admin.vehcile.list')}}">
              <i class="material-icons">content_paste</i>
              <p>Vehcile</p>
            </a>
          </li>
          
          {{-- <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.service.category')}}">
              <i class="material-icons">content_paste</i>
              <p>category</p>
            </a>
          </li> --}}
          
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