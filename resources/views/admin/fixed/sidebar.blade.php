
<div class="sidebar-wrapper">
        <ul class="nav">
          @if(auth()->user()->role=='admin')
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
        
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.service.type.list')}}">
            <i class="fas fa-concierge-bell"></i>
            <p>Service type</p>
          </a>
        </li>
          
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.service.list')}}">
              <i class="material-icons">content_paste</i>
              <p>Service</p>
            </a>
          </li>
          
          
          <!--content(typography)--> 

          <!--content(icon)--> 
          @endif
          
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.request.list')}}">
              <i class="fas fa-book"></i>
              <p>Request</p>
            </a>
          </li>
          @if(auth()->user()->role=='admin')

          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.vehcile.list')}}">
              <i class="fas fa-truck-monster"></i>
              <p>Vhicle</p>
            </a>
          </li>
          
          
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.deposite.list')}}">
              <i class="fas fa-yin-yang"></i>
              <p>Deposite</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.report')}}">
              <i class="far fa-address-book"></i>
              <p>Report</p>
            </a>
          </li>
          @endif

          
        </ul>
      </div>