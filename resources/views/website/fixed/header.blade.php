<header class="page-header">
    <div class="page-header__top">
      <div class="uk-container uk-container-xlarge">
        <div class="page-header__inner">
          {{-- <div class="page-header__top-left">
            <ul>
              <li><i class="fas fa-map-marker-alt"></i><span>1138  Havanna St, San Francisco <b>CA 94108</b></span></li>
              <li><i class="far fa-clock"></i><span>Working Hours <b>Mon to Sat  9am - 7pm</b>  Sunday <b>Closed</b></span></li>
            </ul>
          </div> --}}
          {{-- <div class="page-header__top-right">
            <ul class="social">
              <li class="social-item"><a class="social-item__link" href="#!"><i class="fab fa-twitter"></i></a></li>
              <li class="social-item"><a class="social-item__link" href="#!"><i class="fab fa-facebook-f"></i></a></li>
              <li class="social-item"><a class="social-item__link" href="#!"><i class="fab fa-google-plus-g"></i></a></li>
              <li class="social-item"><a class="social-item__link" href="#!"><i class="fab fa-youtube"></i></a></li>
              <li class="social-item"><a class="social-item__link" href="#!"><i class="fab fa-pinterest-p"></i></a></li>
            </ul><a class="search-btn" href="#modal-search" data-uk-search-icon data-uk-toggle></a>
          </div> --}}
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
                <li><a href="#">About us</a></li>
                <li><a href="{{route('admin.service.list')}}">Services<span data-uk-icon="chevron-down"></span></a>
                  <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                      {{-- <li><a href="https://pro-theme.com/html/cardan/page-services-grid.html">Services Grid</a></li> --}}
                      {{-- <li><a href="https://pro-theme.com/html/cardan/page-services-list.html">Services List</a></li> --}}
                      {{-- <li><a href="https://pro-theme.com/html/cardan/page-services-article.html">Services Single</a></li> --}}
                    </ul>
                  </div>
                </li>
                <li><a href="{{route('website.mechanics.list')}}">Machanics<span data-uk-icon="chevron-down"></span></a>

                 
                  
                </li>
                
                <li><a href="{{route('website.register')}}">Register</a></li>
                
               
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