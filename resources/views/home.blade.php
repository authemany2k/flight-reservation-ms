@extends('layouts.app')

@section('content')
  <div class="_pos-r">
      <div class="theme-hero-area _h-desk-100vh">
        <div class="theme-hero-area-bg-wrap">
          <div class="theme-hero-area-bg" style="background-image:url('img/1500x800.png');" id="hero-banner"></div>
          <div class="theme-hero-area-mask theme-hero-area-mask-half"></div>
          <div class="theme-hero-area-inner-shadow"></div>
          <div class="blur-area" data-bg-area="#hero-banner" data-blur-area="#hero-search-form" data-blur="20" style="filter: blur(20px); background-image: url('img/1500x800.png');"></div>
        </div>
        <div class="theme-hero-area-body _pos-desk-v-c _w-f _pv-mob-60">
          <div class="container">
            <div class="row">
              <div class="col-md-11 ">
                <form action="{{url('flights')}}" class="theme-search-area theme-search-area-stacked theme-search-area-white">
                  <div class="theme-search-area-header _mb-20">
                    <h1 class="theme-search-area-title">Safiri Flights</h1>
                    <p class="theme-search-area-subtitle">Cheap Flights At The Tip of Your Fingers, Everyday</p>
                  </div>
                  <div class="theme-search-area-form" id="hero-search-form">
                    <div class="row" data-gutter="none">
                      <div class="col-md-5 ">
                        <div class="row" data-gutter="none">
                          <div class="col-md-6 ">
                            <div class="theme-search-area-section first theme-search-area-section-curved">
                              <div class="theme-search-area-section-inner">
                                <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                <input name="from" class="theme-search-area-section-input typeahead" type="text" placeholder="From" data-provide="typeahead">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 ">
                            <div class="theme-search-area-section theme-search-area-section-curved">
                              <div class="theme-search-area-section-inner">
                                <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                <input name="dest" class="theme-search-area-section-input typeahead" type="text" placeholder="To" data-provide="typeahead">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="row" data-gutter="none">
                          <div class="col-md-4 ">
                            <div class="theme-search-area-section theme-search-area-section-curved">
                              <div class="theme-search-area-section-inner">
                                <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                <input name="departure" class="theme-search-area-section-input datePickerStart _mob-h" type="text" placeholder="Departure">
                                <input class="theme-search-area-section-input _desk-h mobile-picker" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 ">
                            <div class="theme-search-area-section theme-search-area-section-curved">
                              <div class="theme-search-area-section-inner">
                                <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                <input name="arrival" class="theme-search-area-section-input datePickerEnd _mob-h" type="text" placeholder="Arrival">
                                <input class="theme-search-area-section-input _desk-h mobile-picker"  type="text">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 ">
                            <div class="theme-search-area-section theme-search-area-section-curved quantity-selector" data-increment="Passengers">
                              <div class="theme-search-area-section-inner">
                                <i class="theme-search-area-section-icon lin lin-people"></i>
                                <input name="seats" class="theme-search-area-section-input" value="1 Passenger" type="text">
                                <div class="quantity-selector-box" id="FlySearchPassengers">
                                  <div class="quantity-selector-inner">
                                    <p class="quantity-selector-title">Passengers</p>
                                    <ul class="quantity-selector-controls">
                                      <li class="quantity-selector-decrement">
                                        <a href="#">-</a>
                                      </li>
                                      <li class="quantity-selector-current">1</li>
                                      <li class="quantity-selector-increment">
                                        <a href="#">+</a>
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
                        <button type="submit" class="theme-search-area-submit _mt-0 theme-search-area-submit-glow theme-search-area-submit-curved">
                          <i class="theme-search-area-submit-icon fa fa-angle-right"></i>
                          <span class="_desk-h">Search</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-area-options theme-search-area-options-dot-primary-inverse clearfix">
                    <div class="btn-group theme-search-area-options-list" data-toggle="buttons">
                      <label class="btn btn-primary active">
                        <input type="radio" name="type" id="flight-option-1" value="round" checked="">Round Trip
                      </label>
                      <label class="btn btn-primary">
                        <input type="radio" name="type" id="flight-options" value="one">One Way
                      </label>
                    </div>
                  </div>
                </form>
                <div class="_pt-60">
                  <div class="row row-col-mob-gap">
                    <div class="col-md-3 ">
                      <div class="feature">
                        <i class="feature-icon feature-icon-white feature-icon-box feature-icon-round feature-icon-xs fa fa-check"></i>
                        <div class="feature-caption _c-w">
                          <h5 class="feature-title">Explore the World</h5>
                          <p class="feature-subtitle _op-04">Start to discrover. We will help you to visit any place you can imagine</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 ">
                      <div class="feature">
                        <i class="feature-icon feature-icon-white feature-icon-box feature-icon-round feature-icon-xs fa fa-check"></i>
                        <div class="feature-caption _c-w">
                          <h5 class="feature-title">Gifts &amp; Rewards</h5>
                          <p class="feature-subtitle _op-04">Get even more from our service. Spend less and travel more</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 ">
                      <div class="feature">
                        <i class="feature-icon feature-icon-white feature-icon-box feature-icon-round feature-icon-xs fa fa-check"></i>
                        <div class="feature-caption _c-w">
                          <h5 class="feature-title">Best prices</h5>
                          <p class="feature-subtitle _op-04">We compare hundreds of travel websites to find best price for you</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 ">
                      <div class="feature">
                        <i class="feature-icon feature-icon-white feature-icon-box feature-icon-round feature-icon-xs fa fa-check"></i>
                        <div class="feature-caption _c-w">
                          <h5 class="feature-title">24/7 Support</h5>
                          <p class="feature-subtitle _op-04">Get in touch anytime, anywhere to resolve any issues ASAP</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="theme-footer-abs">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <ul class="theme-footer-abs-nav">
                <li>
                  <a href="{{url('tos')}}">Terms of Service</a>
                </li>
                <li>
                  <a href="{{url('privacy')}}">Privacy Policy</a>
                </li>
                <li>
                  <a href="{{url('/')}}">FAQs</a>
                </li>
              </ul>
              <p class="theme-footer-abs-copyright">© 2018
                <a href="#">Mauko</a>. All rights reserved.
              </p>
            </div>
            <div class="col-md-6">
              <ul class="theme-social-list theme-footer-abs-social">
                <li>
                  <a class="fa fa-facebook" href="#"></a>
                </li>
                <li>
                  <a class="fa fa-twitter" href="#"></a>
                </li>
                <li>
                  <a class="fa fa-google" href="#"></a>
                </li>
                <li>
                  <a class="fa fa-instagram" href="#"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
