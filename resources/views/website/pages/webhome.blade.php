@extends('website.master')
@section('content')

@if(session()->has('message'))
 <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if(session()->has('error'))
 <p class="alert alert-danger">{{session()->get('error')}}</p>
@endif

<main class="page-main">
    <div class="section-first-screen">
      <div class="section-first-screen__shape">
        <div class="uk-position-relative" tabindex="-1" data-uk-slideshow="min-height: 470; max-height: 780; autoplay: true">
          <ul class="uk-slideshow-items">
            <li>
              <div class="first-screen__item">
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left"><img src="https://pro-theme.com/html/cardan/assets/img/slideshow-home-1.jpg" alt data-uk-cover></div>
                <div class="uk-position-center uk-position-small uk-text-center">
                  <div class="first-screen__title" data-uk-slideshow-parallax="x: 100,-100">
                    <div class="uk-h2">Welcome To<br> Remote Vehicle Mechanics</div>
                  </div>
                  <div class="first-screen__btns" data-uk-slideshow-parallax="x: 200,-200">

                  
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="first-screen__item">
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left"><img src="https://pro-theme.com/html/cardan/assets/img/slideshow-home-2.jpg" alt data-uk-cover></div>
                <div class="uk-position-center-left uk-position-small uk-text-left uk-width-1-1">
                  <div class="uk-container uk-width-1-1">
                      
                    </div>
                    <div class="first-screen__btns" data-uk-slideshow-parallax="x: 200,-200">
                      
                      
                  </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="uk-visible@s"><a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a><a class="uk-position-center-right uk-position-small uk-hidden-hover" href="" data-uk-slidenav-next data-uk-slideshow-item="next"></a></div>
          <div class="uk-hidden@s">
            <div class="uk-position-bottom-center uk-position-small uk-light">
              <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin-bottom"></ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="section-features uk-section-large">
      <div class="uk-container">
        <div data-uk-slider>
          <div class="uk-position-relative" tabindex="-1">
            <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m">
              <li>
                <div class="feature-item">
                  <div class="feature-item__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-feature-1.svg" alt="ico-feature" data-uk-svg></div>
                  <div class="feature-item__desc">
                    <div class="feature-item__title">Modern Equipments</div>
                    <div class="feature-item__text">Enim venia quis nostrud exrcit ulamco laboris nsut aliquip com conseq reprehenderit.</div>
                    <div class="feature-item__more"> <a class="uk-button-link" href="#!" data-uk-icon="triangle-right">Read More </a></div>
                  </div>
                </div>
              </li>
              <li>
                  <div class="feature-item">
                    <div class="feature-item__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-feature-2.svg" alt="ico-feature" data-uk-svg></div>
                    <div class="feature-item__desc">
                      <div class="feature-item__title">Trusted Workshop</div>
                      <div class="feature-item__text">We can refe</div>
                      <div class="feature-item__more"> <a class="uk-button-link" href="#!" data-uk-icon="triangle-right">Read More </a></div>
                    </div> 
                </div>
              </li>
              <li>
                <div class="feature-item">
                  <div class="feature-item__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-feature-3.svg" alt="ico-feature" data-uk-svg></div>
                  <div class="feature-item__desc">
                    <div class="feature-item__title">Service Any Vehicle</div>
                    <div class="feature-item__text">We provide the diffrent type of vehicle services.</div>
                    {{-- <div class="feature-item__more"> <a class="uk-button-link" href="#!" data-uk-icon="triangle-right">Read More </a></div> --}}
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top"></ul>
        </div>
      </div> 
    </div>
    <div class="section-about uk-section-large">
      <div class="uk-container">
        <div class="uk-grid uk-grid-small uk-child-width-1-3@l uk-child-width-1-2@s uk-flex-middle uk-flex-center" data-uk-grid>
          <div class="uk-width-1-2@m">
            <div class="about-block-video">
              <div data-uk-lightbox><a href="https://www.youtube.com/watch?v=c2pz2mlSfXA" data-attrs="width: 1280; height: 720;"><img src="https://pro-theme.com/html/cardan/assets/img/img-about-1.jpg" alt="img-about-1"></a></div>
            </div>
          </div>
          <div class="uk-width-1-2@m">
            <div class="section-title"> <span>About our Services</span>
              <h3 class="uk-h2">We’re Committed To Repair<br> Meets The Quality Standards</h3>
            </div>
            <div class="section-content">
              <p>The services we provide, we try to give our best to fulfill the  customer requirements.</p>
            </div>
          </div>
          {{-- <div><img class="uk-width-1-1" src="https://pro-theme.com/html/cardan/assets/img/img-about-2.jpg" alt="img-about-2"></div> --}}
          {{-- <div class="uk-visible@l"><img class="uk-width-1-1" src="https://pro-theme.com/html/cardan/assets/img/img-about-3.jpg" alt="img-about-3"></div>
          <div>
            <ul class="list-checked">
              <li>Top rated excellent reviews from customers</li>
              <li>We provide new offers & promotions</li>
              <li>Expert tecnicians always at service for vehicles</li>
              <li>Get our lifetime gurantee service works</li>
              <li>Offering 1500+ services locations around USA</li>
            </ul>
          </div> --}}
        </div>
      </div>
    </div>
    {{-- <div class="section-partners uk-section-large">
      <div class="uk-container">
        <div class="partners-title">
          <h3 class="uk-h2">CARDAN</h3><span>Trusted by our millions of satisfied partners</span>
        </div>
        <div data-uk-slider>
          <div class="uk-position-relative" tabindex="-1">
            <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l uk-flex-middle uk-text-center">
              <li><img src="https://pro-theme.com/html/cardan/assets/img/img-partner-1.png" alt="partner-logo"></li>
              <li><img src="https://pro-theme.com/html/cardan/assets/img/img-partner-2.png" alt="partner-logo"></li>
              <li><img src="https://pro-theme.com/html/cardan/assets/img/img-partner-3.png" alt="partner-logo"></li>
              <li><img src="https://pro-theme.com/html/cardan/assets/img/img-partner-4.png" alt="partner-logo"></li>
              <li><img src="https://pro-theme.com/html/cardan/assets/img/img-partner-5.png" alt="partner-logo"></li>
            </ul>
          </div>
          <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
        </div>
      </div>
    </div>
    <div class="section-services">
      <div class="section-services__shape">
        <div class="uk-container">
          <div class="section-title uk-text-center"><span>We Promise To Give Best Maintenance</span>
            <h3 class="uk-h2">Vehicle Services We Perform</h3>
          </div>
          <div class="section-container">
            <ul class="service-nav uk-grid uk-grid-collapse uk-child-width-1-4@m uk-child-width-1-2@s" data-uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium; swiping: false">
              <li><a href="#">
                  <div class="uk-h6">Clutch & Transmission</div><span>Includes All Services for This</span>
                </a></li>
              <li><a href="#">
                  <div class="uk-h6">Vehicle Diagnostics</div><span>Includes All Services for This</span>
                </a></li>
              <li><a href="#">
                  <div class="uk-h6">Heating & AC</div><span>Includes All Services for This</span>
                </a></li>
              <li><a href="#">
                  <div class="uk-h6">Engine (Under the Hood)</div><span>Includes All Services for This</span>
                </a></li>
            </ul>
            <ul class="service-content uk-switcher">
              <li>
                <div class="service-content__box">
                  <div class="service-content__media"> <img src="https://pro-theme.com/html/cardan/assets/img/img-service-media.jpg" alt="img-service-media"></div>
                  <div class="service-content__desc">
                    <div class="service-content__head">
                      <div class="service-content__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-service-title.png" alt="ico-service-title"></div>
                      <div class="service-content__title">
                        <div class="uk-h3">Vehicle Diagnostics</div>
                        <p>Auto diagnostic services starts from <b>$79.99</b></p>
                      </div>
                      <div class="service-content__garante"><img src="https://pro-theme.com/html/cardan/assets/img/img-service-garante.jpg" alt="img-service-garante"></div>
                    </div>
                    <div class="service-content__body">
                      <p>Incididunt ut labore sed dolore magna aliquay enim veniam quis nostrud exercitas tion ullamco laboris nisi ut aliquip ex ea reprehen deritin voluptate.</p>
                      <ul class="list-checked uk-column-1-2@s">
                        <li>75 Point Safety Inspection</li>
                        <li>ABS Light is on Inspection</li>
                        <li>AC is not working Inspection</li>
                        <li>Adjust Windshield Washer Jets</li>
                        <li>Air filter is clogged Inspection</li>
                        <li>Air is not coming out Inspection</li>
                        <li>75 Point Safety Inspection</li>
                        <li>ABS Light is on Inspection</li>
                        <li>AC is not working Inspection</li>
                        <li>Adjust Windshield Washer Jets</li>
                        <li>Air filter is clogged Inspection</li>
                        <li>Air is not coming out Inspection</li>
                      </ul>
                      <div class="uk-margin-medium-top"><a class="uk-button uk-button-danger uk-button-large" href="#!" data-uk-icon="triangle-right">View all services</a></div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="service-content__box">
                  <div class="service-content__media"> <img src="https://pro-theme.com/html/cardan/assets/img/img-service-media.jpg" alt="img-service-media"></div>
                  <div class="service-content__desc">
                    <div class="service-content__head">
                      <div class="service-content__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-service-title.png" alt="ico-service-title"></div>
                      <div class="service-content__title">
                        <div class="uk-h3">Vehicle Diagnostics</div>
                        <p>Auto diagnostic services starts from <b>$79.99</b></p>
                      </div>
                      <div class="service-content__garante"><img src="https://pro-theme.com/html/cardan/assets/img/img-service-garante.jpg" alt="img-service-garante"></div>
                    </div>
                    <div class="service-content__body">
                      <p>Incididunt ut labore sed dolore magna aliquay enim veniam quis nostrud exercitas tion ullamco laboris nisi ut aliquip ex ea reprehen deritin voluptate.</p>
                      <ul class="list-checked uk-column-1-2@s">
                        <li>75 Point Safety Inspection</li>
                        <li>ABS Light is on Inspection</li>
                        <li>AC is not working Inspection</li>
                        <li>Adjust Windshield Washer Jets</li>
                        <li>Air filter is clogged Inspection</li>
                        <li>Air is not coming out Inspection</li>
                        <li>75 Point Safety Inspection</li>
                        <li>ABS Light is on Inspection</li>
                        <li>AC is not working Inspection</li>
                        <li>Adjust Windshield Washer Jets</li>
                        <li>Air filter is clogged Inspection</li>
                        <li>Air is not coming out Inspection</li>
                      </ul>
                      <div class="uk-margin-medium-top"><a class="uk-button uk-button-danger uk-button-large" href="#!" data-uk-icon="triangle-right">View all services</a></div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="service-content__box">
                  <div class="service-content__media"> <img src="https://pro-theme.com/html/cardan/assets/img/img-service-media.jpg" alt="img-service-media"></div>
                  <div class="service-content__desc">
                    <div class="service-content__head">
                      <div class="service-content__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-service-title.png" alt="ico-service-title"></div>
                      <div class="service-content__title">
                        <div class="uk-h3">Vehicle Diagnostics</div>
                        <p>Auto diagnostic services starts from <b>$79.99</b></p>
                      </div>
                      <div class="service-content__garante"><img src="https://pro-theme.com/html/cardan/assets/img/img-service-garante.jpg" alt="img-service-garante"></div>
                    </div>
                    <div class="service-content__body">
                      <p>Incididunt ut labore sed dolore magna aliquay enim veniam quis nostrud exercitas tion ullamco laboris nisi ut aliquip ex ea reprehen deritin voluptate.</p>
                      <ul class="list-checked uk-column-1-2@s">
                        <li>75 Point Safety Inspection</li>
                        <li>ABS Light is on Inspection</li>
                        <li>AC is not working Inspection</li>
                        <li>Adjust Windshield Washer Jets</li>
                        <li>Air filter is clogged Inspection</li>
                        <li>Air is not coming out Inspection</li>
                        <li>75 Point Safety Inspection</li>
                        <li>ABS Light is on Inspection</li>
                        <li>AC is not working Inspection</li>
                        <li>Adjust Windshield Washer Jets</li>
                        <li>Air filter is clogged Inspection</li>
                        <li>Air is not coming out Inspection</li>
                      </ul>
                      <div class="uk-margin-medium-top"><a class="uk-button uk-button-danger uk-button-large" href="#!" data-uk-icon="triangle-right">View all services</a></div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="service-content__box">
                  <div class="service-content__media"> <img src="https://pro-theme.com/html/cardan/assets/img/img-service-media.jpg" alt="img-service-media"></div>
                  <div class="service-content__desc">
                    <div class="service-content__head">
                      <div class="service-content__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-service-title.png" alt="ico-service-title"></div>
                      <div class="service-content__title">
                        <div class="uk-h3">Vehicle Diagnostics</div>
                        <p>Auto diagnostic services starts from <b>$79.99</b></p>
                      </div>
                      <div class="service-content__garante"><img src="https://pro-theme.com/html/cardan/assets/img/img-service-garante.jpg" alt="img-service-garante"></div>
                    </div>
                    <div class="service-content__body">
                      <p>Incididunt ut labore sed dolore magna aliquay enim veniam quis nostrud exercitas tion ullamco laboris nisi ut aliquip ex ea reprehen deritin voluptate.</p>
                      <ul class="list-checked uk-column-1-2@s">
                        <li>75 Point Safety Inspection</li>
                        <li>ABS Light is on Inspection</li>
                        <li>AC is not working Inspection</li>
                        <li>Adjust Windshield Washer Jets</li>
                        <li>Air filter is clogged Inspection</li>
                        <li>Air is not coming out Inspection</li>
                        <li>75 Point Safety Inspection</li>
                        <li>ABS Light is on Inspection</li>
                        <li>AC is not working Inspection</li>
                        <li>Adjust Windshield Washer Jets</li>
                        <li>Air filter is clogged Inspection</li>
                        <li>Air is not coming out Inspection</li>
                      </ul>
                      <div class="uk-margin-medium-top"><a class="uk-button uk-button-danger uk-button-large" href="#!" data-uk-icon="triangle-right">View all services</a></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="section-book-appointment">
      <div class="uk-grid uk-grid-divider uk-flex-center uk-flex-middle" data-uk-grid>
        <div>
          <div class="section-title"> <img src="https://pro-theme.com/html/cardan/assets/img/logo-icon.svg" alt="logo-icon">
            <h3 class="uk-h2">Schedule Our Expert <br> Visit Or Get A Quote</h3>
          </div>
        </div>
        <div>
          <div class="block-with-icon"><a class="block-with-icon__link" href="tel:8109204660">
              <div class="block-with-icon__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-phone.png" alt="ico-phone"></div>
              <div class="block-with-icon__desc">
                <div class="block-with-icon__label">Schedule a Visit</div>
                <div class="block-with-icon__value">(810) 920-4660</div>
              </div>
            </a></div>
        </div>
        <div>
          <div class="block-with-icon"><a class="block-with-icon__link" href="mailto:repair@cardan.com">
              <div class="block-with-icon__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-comments.png" alt="ico-comments"></div>
              <div class="block-with-icon__desc">
                <div class="block-with-icon__label">Need Help? Send us Email</div>
                <div class="block-with-icon__value">repair@cardan.com</div>
              </div>
            </a></div>
        </div>
      </div>
    </div>
    <div class="section-steps uk-section-large">
      <div class="uk-container">
        <div class="section-title uk-text-center"><span>Book An Appointment With Easy Steps</span>
          <h3 class="uk-h2">Get Car Repair In Easy Steps</h3>
        </div>
        <div class="section-container">
          <div data-uk-slider="finite: true">
            <div class="uk-position-relative" tabindex="-1">
              <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m">
                <li>
                  <div class="step-item step-item--1">
                    <div class="step-item__icon"> <img src="https://pro-theme.com/html/cardan/assets/img/ico-step-1.png" alt="ico-step"><span class="step-item__numb">01</span></div>
                    <div class="step-item__desc">
                      <div class="step-item__title">Get a Free Quote</div>
                      <div class="step-item__text">Best thing about Antek is to earn some<br> extra revenue on their equipments.</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="step-item step-item--2">
                    <div class="step-item__icon"> <img src="https://pro-theme.com/html/cardan/assets/img/ico-step-2.png" alt="ico-step"><span class="step-item__numb">02</span></div>
                    <div class="step-item__desc">
                      <div class="step-item__title">Book Car Inspection</div>
                      <div class="step-item__text">Best thing about Antek is to earn some<br> extra revenue on their equipments.</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="step-item step-item--3">
                    <div class="step-item__icon"> <img src="https://pro-theme.com/html/cardan/assets/img/ico-step-3.png" alt="ico-step"><span class="step-item__numb">03</span></div>
                    <div class="step-item__desc">
                      <div class="step-item__title">Get Your Car Fixed</div>
                      <div class="step-item__text">Best thing about Antek is to earn some<br> extra revenue on their equipments.</div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-top"></ul>
          </div>
          <div class="uk-margin-large-top uk-text-center"><a class="uk-button uk-button-danger uk-button-large" href="#!" data-uk-icon="triangle-right">Learn more</a><a class="uk-button uk-button-default uk-button-large" href="#!" data-uk-icon="triangle-right">Get an estimate</a></div>
        </div>
      </div>
    </div>
    <div class="section-why-choose">
      <div class="section-why-choose__shape">
        <div class="uk-container">
          <div class="why-choose uk-grid uk-grid-collapse uk-child-width-1-2@m">
            <div>
              <div class="why-choose__media"><img src="https://pro-theme.com/html/cardan/assets/img/img-why-choose.jpg" alt="img-why-choose">
                <div class="uk-overlay-primary uk-position-cover"></div>
                <div class="uk-overlay uk-position-bottom uk-dark"><img src="https://pro-theme.com/html/cardan/assets/img/logo-icon-white.svg" alt="">
                  <div class="uk-h3">Feeling uneasy about<br> your vehicle?<br> Cardan Can Help!</div>
                </div>
              </div>
            </div>
            <div>
              <div class="why-choose__content">
                <div class="section-title"><span>Why Choose Cardan Repair Services</span>
                  <h3 class="uk-h2">Master Technicians With Extensive Knowledge</h3>
                </div>
                <div class="section-content">
                  <p>Tempor incididunt labor sed dolore magna sed aliquay enim ad minim veniam quis nostrud exercitation ullamco laboris ex sed ipsum ea reprehen deritin voluptate.</p>
                  <ul class="why-choose-list">
                    <li class="why-choose-list__item">
                      <div class="why-choose-list__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-why-choose-1.png" alt="ico-why-choose"></div>
                      <div class="why-choose-list__desc">
                        <div class="why-choose-list__title">Reliable & Fast Service</div>
                        <div class="why-choose-list__text">Magna aliqua umt enimd mini venia quis ulamco aliquip equats.</div>
                      </div>
                      <div class="why-choose-list__numb">1 </div>
                    </li>
                    <li class="why-choose-list__item">
                      <div class="why-choose-list__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-why-choose-2.png" alt="ico-why-choose"></div>
                      <div class="why-choose-list__desc">
                        <div class="why-choose-list__title">Right-Way Repairing</div>
                        <div class="why-choose-list__text">Magna aliqua umt enimd mini venia quis ulamco aliquip equats.</div>
                      </div>
                      <div class="why-choose-list__numb">2</div>
                    </li>
                    <li class="why-choose-list__item">
                      <div class="why-choose-list__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-why-choose-3.png" alt="ico-why-choose"></div>
                      <div class="why-choose-list__desc">
                        <div class="why-choose-list__title">Leading Auto Specialists</div>
                        <div class="why-choose-list__text">Magna aliqua umt enimd mini venia quis ulamco aliquip equats.</div>
                      </div>
                      <div class="why-choose-list__numb">3</div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    {{-- <div class="section-types-of-cars uk-section-large">
      <div class="uk-container">
        <div class="section-title uk-text-center"><span>Fixing Any Kind Of Vehicles At Cardan</span>
          <h3 class="uk-h2">Types Of Cars We Repair</h3>
        </div>
        <div class="section-container">
          <div data-uk-slider="autoplay: true">
            <div class="uk-position-relative" tabindex="-1">
              <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-flex-middle" data-uk-height-match=".types-cars-item__icon">
                <li>
                  <div class="types-cars-item">
                    <div class="types-cars-item__box">
                      <div class="types-cars-item__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-types-cars-1.png" alt="ico-types-cars"></div>
                      <div class="types-cars-item__desc">
                        <div class="types-cars-item__title">Luxury Cars</div>
                        <div class="types-cars-item__text">Magna aliqua umt enimd mini venia quis ulamco aliquip equats. </div>
                        <div class="types-cars-item__more"> <a class="uk-button-link" href="#!" data-uk-icon="triangle-right">Learn more </a></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="types-cars-item">
                    <div class="types-cars-item__box">
                      <div class="types-cars-item__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-types-cars-2.png" alt="ico-types-cars"></div>
                      <div class="types-cars-item__desc">
                        <div class="types-cars-item__title">SUV’s & Pickups</div>
                        <div class="types-cars-item__text">Magna aliqua umt enimd mini venia quis ulamco aliquip equats.</div>
                        <div class="types-cars-item__more"> <a class="uk-button-link" href="#!" data-uk-icon="triangle-right">Learn more </a></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="types-cars-item">
                    <div class="types-cars-item__box">
                      <div class="types-cars-item__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-types-cars-3.png" alt="ico-types-cars"></div>
                      <div class="types-cars-item__desc">
                        <div class="types-cars-item__title">Sports Cars</div>
                        <div class="types-cars-item__text">Magna aliqua umt enimd mini venia quis ulamco aliquip equats.</div>
                        <div class="types-cars-item__more"> <a class="uk-button-link" href="#!" data-uk-icon="triangle-right">Learn more </a></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="types-cars-item">
                    <div class="types-cars-item__box">
                      <div class="types-cars-item__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-types-cars-4.png" alt="ico-types-cars"></div>
                      <div class="types-cars-item__desc">
                        <div class="types-cars-item__title">Luxury Cars</div>
                        <div class="types-cars-item__text">Magna aliqua umt enimd mini venia quis ulamco aliquip equats.</div>
                        <div class="types-cars-item__more"> <a class="uk-button-link" href="#!" data-uk-icon="triangle-right">Learn more </a></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="types-cars-item">
                    <div class="types-cars-item__box">
                      <div class="types-cars-item__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-types-cars-5.png" alt="ico-types-cars"></div>
                      <div class="types-cars-item__desc">
                        <div class="types-cars-item__title">SUV’s & Pickups</div>
                        <div class="types-cars-item__text">Magna aliqua umt enimd mini venia quis ulamco aliquip equats.</div>
                        <div class="types-cars-item__more"> <a class="uk-button-link" href="#!" data-uk-icon="triangle-right">Learn more </a></div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="uk-flex uk-flex-center uk-margin-top"><a class="slider-custome-nav" href="#" data-uk-slider-item="previous" data-uk-icon="arrow-left"></a><a class="slider-custome-nav" href="#" data-uk-slider-item="next" data-uk-icon="arrow-right"></a></div>
          </div>
        </div>
      </div>
    </div> --}}
    <div class="section-projects">
      <div class="section-projects__shape">
        <div class="uk-container">
          <div class="section-title uk-text-center"><span>It Is Leader of Repair</span>
            <h3 class="uk-h2">Our Recent Projects</h3>
          </div>
          <div class="section-container">
            <div class="uk-grid uk-grid-small uk-child-width-1-4@m uk-child-width-1-2" data-uk-grid>
              <div>
                <div class="project-item uk-inline-clip uk-transition-toggle uk-light"><a href="#!"> <img class="uk-width-1-1" src="https://pro-theme.com/html/cardan/assets/img/img-project-1.jpg" alt="project">
                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle uk-flex-column"><span data-uk-icon="icon: plus; ratio: 2"></span>
                      <div class="uk-h4">Tyre Change</div>
                    </div>
                  </a></div>
              </div>
              <div>
                <div class="project-item uk-inline-clip uk-transition-toggle uk-light"><a href="#!"> <img class="uk-width-1-1" src="https://pro-theme.com/html/cardan/assets/img/img-project-2.jpg" alt="project">
                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle uk-flex-column"><span data-uk-icon="icon: plus; ratio: 2"></span>
                      <div class="uk-h4">Tool Fix</div>
                    </div>
                  </a></div>
              </div>
              <div>
                <div class="project-item uk-inline-clip uk-transition-toggle uk-light"><a href="#!"> <img class="uk-width-1-1" src="https://pro-theme.com/html/cardan/assets/img/img-project-3.jpg" alt="project">
                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle uk-flex-column"><span data-uk-icon="icon: plus; ratio: 2"></span>
                      <div class="uk-h4">Change Engine oil</div>
                    </div>
                  </a></div>
              </div>
              <div>
                <div class="project-item uk-inline-clip uk-transition-toggle uk-light"><a href="#!"> <img class="uk-width-1-1" src="https://pro-theme.com/html/cardan/assets/img/img-project-4.jpg" alt="project">
                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle uk-flex-column"><span data-uk-icon="icon: plus; ratio: 2"></span>
                      <div class="uk-h4">Brake Repair</div>
                    </div>
                  </a></div>
              </div>
              <div>
                <div class="project-item uk-inline-clip uk-transition-toggle uk-light"><a href="#!"> <img class="uk-width-1-1" src="https://pro-theme.com/html/cardan/assets/img/img-project-5.jpg" alt="project">
                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle uk-flex-column"><span data-uk-icon="icon: plus; ratio: 2"></span>
                      <div class="uk-h4">Filter Replacement</div>
                    </div>
                  </a></div>
              </div>
              <div>
                <div class="project-item uk-inline-clip uk-transition-toggle uk-light"><a href="#!"> <img class="uk-width-1-1" src="https://pro-theme.com/html/cardan/assets/img/img-project-6.jpg" alt="project">
                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle uk-flex-column"><span data-uk-icon="icon: plus; ratio: 2"></span>
                      <div class="uk-h4">Checking Lights</div>
                    </div>
                  </a></div>
              </div>
              <div>
                <div class="project-item uk-inline-clip uk-transition-toggle uk-light"><a href="#!"> <img class="uk-width-1-1" src="https://pro-theme.com/html/cardan/assets/img/img-project-7.jpg" alt="project">
                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle uk-flex-column"><span data-uk-icon="icon: plus; ratio: 2"></span>
                      <div class="uk-h4">Fuel Filter</div>
                    </div>
                  </a></div>
              </div>
              <div>
                <div class="project-item uk-inline-clip uk-transition-toggle uk-light"><a href="#!"> <img class="uk-width-1-1" src="https://pro-theme.com/html/cardan/assets/img/img-project-8.jpg" alt="project">
                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle uk-flex-column"><span data-uk-icon="icon: plus; ratio: 2"></span>
                      <div class="uk-h4">Engine fix</div>
                    </div>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="section-reviews uk-section-large">
      <div class="uk-container">
        <div class="section-title uk-text-center"><span>We Promise You To Give Best Repair Services</span>
          <h3 class="uk-h2">Nicest Words From Customers</h3>
        </div>
        <div class="section-container">
          <div data-uk-slider="autoplay: true">
            <div class="uk-position-relative" tabindex="-1">
              <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                <li>
                  <div class="review-item">
                    <div class="review-item__box">
                      <div class="review-item__body">
                        <div class="review-item__title">Satisfied With their services</div>
                        <div class="review-item__text">At dolore magna aliqua umt enim ad mini veniam quis ulamco aliquip commodo da consequat duis aute irue derit voluptate cillum dolore afugiat.</div>
                      </div>
                      <div class="review-item__user">
                        <div class="review-item__user-avatar"><img src="https://pro-theme.com/html/cardan/assets/img/pic-avatar-1.png" alt="pic-avatar"></div>
                        <div class="review-item__user-info">
                          <div class="review-item__user-name">Donald H. James</div>
                          <div class="review-item__user-position">Car Owner Repair</div>
                        </div>
                        <div class="review-item__user-stars"><img src="https://pro-theme.com/html/cardan/assets/img/decor-stars.png" alt="stars"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="review-item">
                    <div class="review-item__box">
                      <div class="review-item__body">
                        <div class="review-item__title">Extremely Fast Service, Prompt Arrival, BEST! Incredible Job Done By Mechanic</div>
                        <div class="review-item__text">At dolore magna aliqua umt enim ad mini veniam quis ulamco aliquip commodo da consequat duis aute irue derit voluptate cillum dolore afugiat.</div>
                      </div>
                      <div class="review-item__user">
                        <div class="review-item__user-avatar"><img src="https://pro-theme.com/html/cardan/assets/img/pic-avatar-2.png" alt="pic-avatar"></div>
                        <div class="review-item__user-info">
                          <div class="review-item__user-name">Katherine A. Fogg</div>
                          <div class="review-item__user-position">Car Owner Repair</div>
                        </div>
                        <div class="review-item__user-stars"><img src="https://pro-theme.com/html/cardan/assets/img/decor-stars.png" alt="stars"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="review-item">
                    <div class="review-item__box">
                      <div class="review-item__body">
                        <div class="review-item__title">Satisfied With The Workshop Facilities At Cardan Auto Repair Workshop</div>
                        <div class="review-item__text">At dolore magna aliqua umt enim ad mini veniam quis ulamco aliquip commodo da consequat duis aute irue derit voluptate cillum dolore afugiat.</div>
                      </div>
                      <div class="review-item__user">
                        <div class="review-item__user-avatar"><img src="https://pro-theme.com/html/cardan/assets/img/pic-avatar-1.png" alt="pic-avatar"></div>
                        <div class="review-item__user-info">
                          <div class="review-item__user-name">Donald H. James</div>
                          <div class="review-item__user-position">Car Owner Repair</div>
                        </div>
                        <div class="review-item__user-stars"><img src="https://pro-theme.com/html/cardan/assets/img/decor-stars.png" alt="stars"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="review-item">
                    <div class="review-item__box">
                      <div class="review-item__body">
                        <div class="review-item__title">Extremely Fast Service, Prompt Arrival, BEST! Incredible Job Done By Mechanic</div>
                        <div class="review-item__text">At dolore magna aliqua umt enim ad mini veniam quis ulamco aliquip commodo da consequat duis aute irue derit voluptate cillum dolore afugiat.</div>
                      </div>
                      <div class="review-item__user">
                        <div class="review-item__user-avatar"><img src="https://pro-theme.com/html/cardan/assets/img/pic-avatar-2.png" alt="pic-avatar"></div>
                        <div class="review-item__user-info">
                          <div class="review-item__user-name">Katherine A. Fogg</div>
                          <div class="review-item__user-position">Car Owner Repair</div>
                        </div>
                        <div class="review-item__user-stars"><img src="https://pro-theme.com/html/cardan/assets/img/decor-stars.png" alt="stars"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="review-item">
                    <div class="review-item__box">
                      <div class="review-item__body">
                        <div class="review-item__title">Satisfied With The Workshop Facilities At Cardan Auto Repair Workshop</div>
                        <div class="review-item__text">At dolore magna aliqua umt enim ad mini veniam quis ulamco aliquip commodo da consequat duis aute irue derit voluptate cillum dolore afugiat.</div>
                      </div>
                      <div class="review-item__user">
                        <div class="review-item__user-avatar"><img src="https://pro-theme.com/html/cardan/assets/img/pic-avatar-1.png" alt="pic-avatar"></div>
                        <div class="review-item__user-info">
                          <div class="review-item__user-name">Donald H. James</div>
                          <div class="review-item__user-position">Car Owner Repair</div>
                        </div>
                        <div class="review-item__user-stars"><img src="https://pro-theme.com/html/cardan/assets/img/decor-stars.png" alt="stars"></div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
          </div>
        </div>
      </div> --}}
    </div>
    {{-- <div class="section-stats">
      <div class="section-stats__shape">
        <div class="uk-grid uk-grid-large uk-child-width-auto uk-flex-center">
          <div>
            <div class="stat-item">
              <div class="stat-item__top">
                <div class="stat-item__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-stat-1.png" alt="ico-stat"></div>
                <div class="stat-item__value">500+</div>
              </div>
              <div class="stat-item__title">Vehicles repaired</div>
            </div>
          </div>
          <div>
            <div class="stat-item">
              <div class="stat-item__top">
                <div class="stat-item__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-stat-2.png" alt="ico-stat"></div>
                <div class="stat-item__value">20+</div>
              </div>
              <div class="stat-item__title">Workshop network</div>
            </div>
          </div>
          <div>
            <div class="stat-item">
              <div class="stat-item__top">
                <div class="stat-item__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-stat-3.png" alt="ico-stat"></div>
                <div class="stat-item__value">500+</div>
              </div>
              <div class="stat-item__title">happy customers</div>
            </div>
          </div>
          <div>
            <div class="stat-item">
              <div class="stat-item__top">
                <div class="stat-item__icon"><img src="https://pro-theme.com/html/cardan/assets/img/ico-stat-4.png" alt="ico-stat"></div>
                <div class="stat-item__value">20+</div>
              </div>
              <div class="stat-item__title">expert technicians</div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    
    </div>
  </main>
@endsection