<header class="page-header">
    <div class="page-header__top">
      <div class="uk-container uk-container-xlarge">
        <div class="page-header__inner">
        
        </div>
      </div>
    </div>
    <div class="page-header__bottom" data-uk-sticky>
      <div class="uk-container uk-container-xlarge">
        <div class="page-header__inner">
        {{-- header logo --}}
         {{-- <div class="page-header__logo logo"><a class="logo__link" href="index.html"><img class="logo__img" src="https://pro-theme.com/html/cardan/assets/img/logo.png" alt="logo"></a></div>  --}}
          <div class="page-header__menu mainmenu">
            <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar="">
              <ul class="uk-navbar-nav">
                <li><a href="{{route('webhome')}}">Home</a>
                 
                </li>
                
                <li><a href="{{route('website.service.list')}}">Services</a>
                
                <li><a href="{{route('website.vehcile.list')}}">Vehicle</a></li>
                
                <li><a href="{{route('website.register')}}">Register</a></li>

                <li><a href="{{route('website.mecregister')}}">Mechanics Register</a></li>
                @if(auth()->user())
                @if (auth()->user()->role == "user")
                <li><a href="{{route('website.request')}}">Request</a></li>
                <li><a href="{{route('website.myrequest')}}">Myrequest</a></li>
                @endif
                
                <li><a href="{{route('website.user.profile')}}">Profile</a></li>
                @auth
                {{-- <li><a href="{{route('website.deposite')}}">Mechanics panel</a></li> --}}
                @endauth
                <li><a href="{{route('user.logout')}}">Logout</a></li>
                <li><button >{{(auth()->user()->name)}}</button></li>
                @else
                <li><a href="{{route('website.login')}}">Login</a></li>
                @endif












                  <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                      {{-- <li><a href="https://pro-theme.com/html/cardan/page-blog-grid.html">Blog grid</a></li> --}}
                      {{-- <li><a href="https://pro-theme.com/html/cardan/page-blog-list.html">Blog list</a></li> --}}
                      {{-- <li><a href="https://pro-theme.com/html/cardan/page-blog-article.html">Blog article</a></li> --}}
                    </ul>
                  </div>
                
              </ul>
            </nav>
          </div>
          {{-- <div class="page-header__callback block-with-icon"><a class="block-with-icon__link" href="tel:8109200664">
              <div class="block-with-icon__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-callback.svg" alt="ico-callback"></div>
              <div class="block-with-icon__desc">
                <div class="block-with-icon__label">Talk With Our Experts</div>
                <div class="block-with-icon__value">(810) 920-0664</div>
              </div>
            </a></div> --}}
          <div class="page-header__btn-menu"><a href="#offcanvas" data-uk-toggle data-uk-icon="menu"></a></div>
        </div>
      </div>
    </div>
  </header>