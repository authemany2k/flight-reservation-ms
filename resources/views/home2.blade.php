@extends('layouts.app')

@section('content')
    <div class="theme-hero-area _h-desk-100vh">
      <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg" style="background-image:url(./img/1500x800.png);"></div>
        <div class="theme-hero-area-grad-mask theme-hero-area-grad-mask-bold"></div>
        <div class="blur-area" data-bg-area="#" data-blur-area="#hero-search-form" data-blur="20"></div>
      </div>
      <div class="theme-hero-area-body _pos-desk-v-c _w-f _pv-mob-60">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <form class="theme-search-area theme-search-area-stacked theme-search-area-white" action="{{url('flights')}}">
                <div class="theme-search-area-header _ta-c">
                  <h1 class="theme-search-area-title theme-search-area-title-lg">Safiri Ticketing Services</h1>
                  <p class="theme-search-area-subtitle">Book your flights at the comfort of your seat at home.</p>
                </div>
                <div class="theme-search-area-form" id="hero-search-form">
                  <div class="row" data-gutter="none">
                    <div class="col-md-5 ">
                      <div class="row" data-gutter="none">
                        <div class="col-md-6 ">
                          <div class="theme-search-area-section first theme-search-area-section-fade-white theme-search-area-section-mr theme-search-area-section-no-border theme-search-area-section-curved">
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                              <input name="from" class="theme-search-area-section-input typeahead" type="text" placeholder="Departure" data-provide="typeahead"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 ">
                          <div class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-mr theme-search-area-section-no-border theme-search-area-section-curved">
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                              <input name="to" class="theme-search-area-section-input typeahead" type="text" placeholder="Destination" data-provide="typeahead"/>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 ">
                      <div class="row" data-gutter="none">
                        <div class="col-md-4 ">
                          <div class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-mr theme-search-area-section-no-border theme-search-area-section-curved">
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon lin lin-calendar"></i>
                              <input class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Departure"/>
                              <input name="departure" class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 ">
                          <div class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-mr theme-search-area-section-no-border theme-search-area-section-curved">
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon lin lin-calendar"></i>
                              <input class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 07/02" type="text" placeholder="Arrival"/>
                              <input name="arrival" class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 ">
                          <div class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-mr theme-search-area-section-no-border theme-search-area-section-curved quantity-selector" data-increment="Passengers">
                            <div class="theme-search-area-section-inner">
                              <i class="theme-search-area-section-icon lin lin-people"></i>
                              <input name="passengers" class="theme-search-area-section-input" value="1" type="text"/>
                              <div class="quantity-selector-box" id="FlySearchPassengers">
                                <div class="quantity-selector-inner">
                                  <p class="quantity-selector-title">Passengers</p>
                                  <ul class="quantity-selector-controls">
                                    <li class="quantity-selector-decrement">
                                      <a href="#">&#45;</a>
                                    </li>
                                    <li class="quantity-selector-current">1</li>
                                    <li class="quantity-selector-increment">
                                      <a href="#">&#43;</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-1 ">
                      <button type="submit" class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-no-border theme-search-area-submit-glow theme-search-area-submit-curved">
                        <i class="theme-search-area-submit-icon fa fa-angle-right"></i>
                        <span class="_desk-h">Search</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="theme-search-area-options theme-search-area-options-center theme-search-area-options-dot-primary-inverse clearfix">
                  <div class="btn-group theme-search-area-options-list" data-toggle="buttons">
                    <label class="btn btn-primary active">
                      <input type="radio" name="type" value="round" id="flight-option-1" checked/>Round Trip
                    </label>
                    <label class="btn btn-primary">
                      <input type="radio" name="type" value="one" id="flight-option-2"/>One Way
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="theme-page-section theme-page-section-xxl theme-page-section-dark">
      <div class="container">
        <div class="theme-page-section-header theme-page-section-header-white">
          <h5 class="theme-page-section-title">Popular Destinations</h5>
          <p class="theme-page-section-subtitle">Summer most popular flight routes</p>
        </div>
        <div class="theme-inline-slider row" data-gutter="10">
          <div class="owl-carousel owl-carousel-nav-white" data-items="4" data-loop="true" data-nav="true">
            <div class="theme-inline-slider-item">
              <div class="banner _h-45vh _br-4 banner-animate banner-animate-zoom-in">
                <div class="banner-bg" style="background-image:url(./img/400x500.png);"></div>
                <a class="banner-link" href="#"></a>
                <div class="banner-caption _ta-c _pt-60 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">Pattaya City</h5>
                  <p class="banner-subtitle _fw-n">Thailand</p>
                </div>
              </div>
            </div>
            <div class="theme-inline-slider-item">
              <div class="banner _h-45vh _br-4 banner-animate banner-animate-zoom-in">
                <div class="banner-bg" style="background-image:url(./img/400x500.png);"></div>
                <a class="banner-link" href="#"></a>
                <div class="banner-caption _ta-c _pt-60 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">San Francisco</h5>
                  <p class="banner-subtitle _fw-n">United States</p>
                </div>
              </div>
            </div>
            <div class="theme-inline-slider-item">
              <div class="banner _h-45vh _br-4 banner-animate banner-animate-zoom-in">
                <div class="banner-bg" style="background-image:url(./img/400x500.png);"></div>
                <a class="banner-link" href="#"></a>
                <div class="banner-caption _ta-c _pt-60 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">Tokyo</h5>
                  <p class="banner-subtitle _fw-n">Japan</p>
                </div>
              </div>
            </div>
            <div class="theme-inline-slider-item">
              <div class="banner _h-45vh _br-4 banner-animate banner-animate-zoom-in">
                <div class="banner-bg" style="background-image:url(./img/400x500.png);"></div>
                <a class="banner-link" href="#"></a>
                <div class="banner-caption _ta-c _pt-60 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">Sydney</h5>
                  <p class="banner-subtitle _fw-n">Australia</p>
                </div>
              </div>
            </div>
            <div class="theme-inline-slider-item">
              <div class="banner _h-45vh _br-4 banner-animate banner-animate-zoom-in">
                <div class="banner-bg" style="background-image:url(./img/400x500.png);"></div>
                <a class="banner-link" href="#"></a>
                <div class="banner-caption _ta-c _pt-60 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">Paris</h5>
                  <p class="banner-subtitle _fw-n">France</p>
                </div>
              </div>
            </div>
            <div class="theme-inline-slider-item">
              <div class="banner _h-45vh _br-4 banner-animate banner-animate-zoom-in">
                <div class="banner-bg" style="background-image:url(./img/400x500.png);"></div>
                <a class="banner-link" href="#"></a>
                <div class="banner-caption _ta-c _pt-60 banner-caption-bottom banner-caption-grad">
                  <h5 class="banner-title">London</h5>
                  <p class="banner-subtitle _fw-n">United Kindom</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="theme-hero-area">
      <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg ws-action" style="background-image:url(./img/1500x801.png);" data-parallax="true"></div>
        <div class="theme-hero-area-mask"></div>
      </div>
      <div class="theme-hero-area-body">
        <div class="theme-page-section theme-page-section-xxl">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <div class="theme-hero-text theme-hero-text-white theme-hero-text-center">
                  <div class="theme-hero-text-header">
                    <h2 class="theme-hero-text-title">Save Up to 70%</h2>
                    <p class="theme-hero-text-subtitle">Subscribe now and unlock our secret deals. Save up to 70% by getting access to our special offers for hotels, flights, cars, vacation rentals and travel experiences.</p>
                  </div>
                  <a class="btn _mt-20 _tt-uc btn-white btn-ghost btn-lg" href="#">Sign up now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="theme-page-section theme-page-section-xxl theme-page-section-dark">
      <div class="container">
        <div class="theme-page-section-header theme-page-section-header-white">
          <h5 class="theme-page-section-title">Travel Inspirations</h5>
          <p class="theme-page-section-subtitle">Our latest travel tips, hacks and insights</p>
        </div>
        <div class="theme-inline-slider row" data-gutter="10">
          <div class="owl-carousel owl-carousel-nav-white" data-items="4" data-loop="true" data-nav="true">
            <div class="theme-inline-slider-item">
              <div class="theme-blog-item _br-4 theme-blog-item-white">
                <a class="theme-blog-item-link" href="blog-post.html"></a>
                <div class="banner _h-45vh  banner-">
                  <div class="banner-bg" style="background-image:url(./img/350x260.png);"></div>
                  <div class="banner-caption banner-caption-bottom banner-caption-">
                    <p class="theme-blog-item-time">day ago</p>
                    <h5 class="theme-blog-item-title">Booking hotel in India</h5>
                    <p class="theme-blog-item-desc">Amet cursus duis proin mauris quam quisque porttitor netus vulputate</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="theme-inline-slider-item">
              <div class="theme-blog-item _br-4 theme-blog-item-full">
                <a class="theme-blog-item-link" href="blog-post.html"></a>
                <div class="banner _h-45vh  banner-">
                  <div class="banner-bg" style="background-image:url(./img/350x435.png);"></div>
                  <div class="banner-caption banner-caption-bottom banner-caption-grad">
                    <p class="theme-blog-item-time">week ago</p>
                    <h5 class="theme-blog-item-title">Total Solar Eclipse</h5>
                    <p class="theme-blog-item-desc">Ultrices morbi aliquet hendrerit in iaculis tristique diam bibendum consequat</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="theme-inline-slider-item">
              <div class="theme-blog-item _br-4 theme-blog-item-white">
                <a class="theme-blog-item-link" href="blog-post.html"></a>
                <div class="banner _h-45vh  banner-">
                  <div class="banner-bg" style="background-image:url(./img/350x260.png);"></div>
                  <div class="banner-caption banner-caption-bottom banner-caption-">
                    <p class="theme-blog-item-time">2 weeks ago</p>
                    <h5 class="theme-blog-item-title">Lights of Venice</h5>
                    <p class="theme-blog-item-desc">Lacus arcu viverra senectus lectus nisi luctus lectus lobortis ultricies</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="theme-inline-slider-item">
              <div class="theme-blog-item _br-4 theme-blog-item-white">
                <a class="theme-blog-item-link" href="blog-post.html"></a>
                <div class="banner _h-45vh  banner-">
                  <div class="banner-bg" style="background-image:url(./img/350x260.png);"></div>
                  <div class="banner-caption banner-caption-bottom banner-caption-">
                    <p class="theme-blog-item-time">2 weeks ago</p>
                    <h5 class="theme-blog-item-title">Alaska days</h5>
                    <p class="theme-blog-item-desc">Tristique mattis class consequat enim non tempor ad faucibus litora</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="theme-inline-slider-item">
              <div class="theme-blog-item _br-4 theme-blog-item-full">
                <a class="theme-blog-item-link" href="blog-post.html"></a>
                <div class="banner _h-45vh  banner-">
                  <div class="banner-bg" style="background-image:url(./img/350x435.png);"></div>
                  <div class="banner-caption banner-caption-bottom banner-caption-grad">
                    <p class="theme-blog-item-time">mounth ago</p>
                    <h5 class="theme-blog-item-title">Mix up your cabin classes</h5>
                    <p class="theme-blog-item-desc">Accumsan eleifend accumsan ante nisi interdum lacus malesuada netus mauris</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
