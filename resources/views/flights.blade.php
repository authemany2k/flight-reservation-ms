@extends('layouts.app')

@section('content')
    <div class="theme-hero-area front">
      <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg theme-hero-area-bg-blur" style="background-image:url({{asset('img/1500x800.png')}});"></div>
        <div class="theme-hero-area-mask theme-hero-area-mask-half"></div>
      </div>
      <div class="theme-hero-area-body">
        <div class="container">
          <div class="_pb-50 _pt-100 _pv-mob-50">
            <div class="theme-search-area _mob-h theme-search-area-white">
              <div class="theme-search-area-header _mb-20">
                <h1 class="theme-search-area-title theme-search-area-title-sm">@if(app('request')->query('dest')) {{count($flights)}} Flights to {{app('request')->query('dest', 'London')}} @else {{count($flights)}} Flights Found @endif</h1>
              </div>
              <form class="theme-search-area-form" id="hero-search-form" action="{{url('flights')}}">
                <div class="row" data-gutter="10">
                  <div class="col-md-5 ">
                    <div class="row" data-gutter="10">
                      <div class="col-md-6 ">
                        <div class="theme-search-area-section first theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                          <label class="theme-search-area-section-label _op-06">From</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                            <input name="from" class="theme-search-area-section-input typeahead" value="{{app('request')->query('from', 'London')}}" type="text" placeholder="From" data-provide="typeahead"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                          <label class="theme-search-area-section-label _op-06">To</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                            <input name="dest" class="theme-search-area-section-input typeahead" value="{{app('request')->query('dest', 'Nairobi')}}" type="text" placeholder="To" data-provide="typeahead"/>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 ">
                    <div class="row" data-gutter="10">
                      <div class="col-md-4 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                          <label class="theme-search-area-section-label _op-06">Departure</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                            <input name="departure" class="theme-search-area-section-input datePickerStart _mob-h" type="text" placeholder="Departure" value="{{app('request')->query('departure', date('Y-m-d'))}}" />
                            <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                          <label class="theme-search-area-section-label _op-06">Arrival</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                            <input name="arrival" class="theme-search-area-section-input datePickerEnd _mob-h" type="text" placeholder="Arrival" value="{{app('request')->query('arrival', date('Y-m-d'))}}" />
                            <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 ">
                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border quantity-selector" data-increment="Passengers">
                          <label class="theme-search-area-section-label _op-06">Passengers</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-people"></i>
                            <input name="seats" class="theme-search-area-section-input" value="{{app('request')->query('seats', '1 Passenger')}}" type="text"/>
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
                    <button class="theme-search-area-submit _tt-uc theme-search-area-submit-curved theme-search-area-submit-sm theme-search-area-submit-no-border theme-search-area-submit-primary">Edit</button>
                  </div>
                </div>
              </form>
              <div class="theme-search-area-options clearfix">
                <div class="btn-group theme-search-area-options-list" data-toggle="buttons">
                  <label class="btn btn-primary active">
                    <input type="radio" name="type" value="round" id="flight-option-1" checked/>Round Trip
                  </label>
                  <label class="btn btn-primary">
                    <input type="radio" name="type" value="one" id="flight-option-2"/>One Way
                  </label>
                </div>
              </div>
            </div>
            <div class="theme-search-area-inline _desk-h theme-search-area-inline-white">
              <h4 class="theme-search-area-inline-title">Lodon Flights</h4>
              <p class="theme-search-area-inline-details">June 27 &rarr; July 02, 1 Passenger</p>
              <a class="theme-search-area-inline-link magnific-inline" href="#searchEditModal">
                <i class="fa fa-pencil"></i>Edit
              </a>
              <div class="magnific-popup magnific-popup-sm mfp-hide" id="searchEditModal">
                <div class="theme-search-area theme-search-area-vert">
                  <div class="theme-search-area-header">
                    <h1 class="theme-search-area-title theme-search-area-title-sm">Edit your Search</h1>
                    <p class="theme-search-area-subtitle">Prices might be different from current results</p>
                  </div>
                  <form class="theme-search-area-form" action="{{url('flights')}}">
                    <div class="theme-search-area-section first theme-search-area-section-curved">
                      <label class="theme-search-area-section-label">From</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                        <input name="from" class="theme-search-area-section-input typeahead" value="New York" type="text" placeholder="From" data-provide="typeahead"/>
                      </div>
                    </div>
                    <div class="theme-search-area-section theme-search-area-section-curved">
                      <label class="theme-search-area-section-label">To</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                        <input name="dest" class="theme-search-area-section-input typeahead" type="text" placeholder="To" data-provide="typeahead"/>
                      </div>
                    </div>
                    <div class="row" data-gutter="10">
                      <div class="col-md-6 ">
                        <div class="theme-search-area-section theme-search-area-section-curved">
                          <label class="theme-search-area-section-label">Depart</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                            <input name="departure" class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in"/>
                            <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 ">
                        <div class="theme-search-area-section theme-search-area-section-curved">
                          <label class="theme-search-area-section-label">Arrival</label>
                          <div class="theme-search-area-section-inner">
                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                            <input name="arrival" class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 07/02" type="text" placeholder="Check-out"/>
                            <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="theme-search-area-section theme-search-area-section-curved quantity-selector" data-increment="Passengers">
                      <label class="theme-search-area-section-label">Passengers</label>
                      <div class="theme-search-area-section-inner">
                        <i class="theme-search-area-section-icon lin lin-people"></i>
                        <input name="seats" class="theme-search-area-section-input" value="1 Passenger" type="text"/>
                        <div class="quantity-selector-box" id="mobile-FlySearchPassengers">
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
                    <button type="submit" class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-curved">Change</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="theme-page-section theme-page-section-gray">
      <div class="container">
        <div class="row row-col-static" id="sticky-parent" data-gutter="20">
          <div class="col-md-2-5 ">
            <div class="sticky-col _mob-h">
              <div class="theme-search-results-sidebar">
                <div class="theme-search-results-sidebar-sections _mb-20 _br-2">
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Stops</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">nonstop</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$305</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">1 stop</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$349</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">2 stops</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$154</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Flight Class</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Economy</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$375</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Business</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$292</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">First</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$332</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Price</h5>
                    <div class="theme-search-results-sidebar-section-price">
                      <input id="price-slider" name="price-slider" data-min="100" data-max="500"/>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Take-off London</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$466</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$256</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$257</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Landing New York</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$404</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$216</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$286</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Take-off New York</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$411</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$386</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$285</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Landing London</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$469</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$248</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$190</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">London Airport</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">CLY: City</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$336</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">LHR: Heathrow</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$229</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">LCW: Gatwich</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$403</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">STN: Stansed</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$405</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">SEN: Southend</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$319</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">New York Airport</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">JFK: John F. Kennedy</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$366</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">LGA: LaGuardia</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$257</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">EWR: Newark Liberty</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$424</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="theme-search-results-sidebar-section">
                    <h5 class="theme-search-results-sidebar-section-title">Airlines</h5>
                    <div class="theme-search-results-sidebar-section-checkbox-list">
                      <div class="theme-search-results-sidebar-section-checkbox-list-items">
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">KLM Royal Dutch...</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$127</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">LOT Polish Airlines</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$261</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Wow Airlines</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$423</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Virgin Atlantic...</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$268</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Delta Airlines</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$425</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">SWISS Airlines</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$403</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Lufthansa</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$469</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">American Airlines</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$319</span>
                        </div>
                        <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                          <label class="icheck-label">
                            <input class="icheck" type="checkbox"/>
                            <span class="icheck-title">Fly Emirates</span>
                          </label>
                          <span class="theme-search-results-sidebar-section-checkbox-list-amount">$105</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-ad">
                <a class="theme-ad-link" href="#"></a>
                <p class="theme-ad-sign">Advertisement</p>
                <img class="theme-ad-img" src="{{asset('img/300x500.png')}}" alt="Image Alternative text" title="Image Title"/>
              </div>
            </div>
          </div>
          <div class="col-md-7 ">
            <div class="theme-search-results-sort _mob-h clearfix">
              <h5 class="theme-search-results-sort-title">Sort by:</h5>
              <ul class="theme-search-results-sort-list">
                <li>
                  <a href="#">Price
                    <span>Low &rarr; High</span>
                  </a>
                </li>
                <li class="active">
                  <a href="#">Duration
                    <span>Long &rarr; Short</span>
                  </a>
                </li>
                <li>
                  <a href="#">Recommended
                    <span>High &rarr; Low</span>
                  </a>
                </li>
                <li>
                  <a href="#">Airline Name
                    <span>Name &nbsp; A &rarr; Z</span>
                  </a>
                </li>
              </ul>
              <div class="dropdown theme-search-results-sort-alt">
                <a id="dropdownMenu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">More
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                  <li>
                    <a href="#">Departure take-off</a>
                  </li>
                  <li>
                    <a href="#">Departure landing</a>
                  </li>
                  <li>
                    <a href="#">Return take-off</a>
                  </li>
                  <li>
                    <a href="#">Return landing</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="theme-search-results-sort-select _desk-h">
              <select>
                <option>Price</option>
                <option>Duration</option>
                <option>Recommended</option>
                <option>Airline Name</option>
                <option>Departure take-off</option>
                <option>Departure landing</option>
                <option>Return take-off</option>
                <option>Return landing</option>
              </select>
            </div>
            @if(!Auth::check())
            <div class="theme-search-results-sign-in _mob-h bg-grad">
              <i class="theme-search-results-sign-in-icon fa fa-unlock-alt"></i>
              <h5 class="theme-search-results-sign-in-title">Sign in to unlock awesome offers and deals. Save up to
                <b>50%</b>
              </h5>
              <a class="btn theme-search-results-sign-in-btn btn-ghost btn-white" href="{{route('login')}}">Sign in now</a>
            </div>
            @endif
            @if(!empty($flights))
            <div class="theme-search-results">
              @foreach($flights as $flight)
                <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                  <div class="theme-search-results-item-preview">
                    <a class="theme-search-results-item-mask-link" href="#searchResultsItem-{{$flight->id}}" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-{{$flight->id}}"></a>
                    <div class="row" data-gutter="20">
                      <div class="col-md-10 ">
                        <div class="theme-search-results-item-flight-sections">
                          <div class="theme-search-results-item-flight-section">
                            <div class="row row-no-gutter row-eq-height">
                              <div class="col-md-2 ">
                                <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                  <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/351x253.png')}}" alt="Image Alternative text" title="Image Title"/>
                                </div>
                              </div>
                              <div class="col-md-10 ">
                                <div class="theme-search-results-item-flight-section-item">
                                  <div class="row">
                                    <div class="col-md-3 ">
                                      <div class="theme-search-results-item-flight-section-meta">
                                        <p class="theme-search-results-item-flight-section-meta-time">07:30
                                          <span>pm</span>
                                        </p>
                                        <p class="theme-search-results-item-flight-section-meta-city">{{explode(',', $flight->from)[0]}}</p>
                                        <p class="theme-search-results-item-flight-section-meta-date">{{date('M j, Y', strtotime($flight->departure))}}</p>
                                      </div>
                                    </div>
                                    <div class="col-md-6 ">
                                      <div class="theme-search-results-item-flight-section-path">
                                        <div class="theme-search-results-item-flight-section-path-fly-time">
                                          <p>{{$flight->duration}}</p>
                                        </div>
                                        <div class="theme-search-results-item-flight-section-path-line"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-start">
                                          <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                          <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                          <div class="theme-search-results-item-flight-section-path-line-title">CLY</div>
                                        </div>
                                        <div class="theme-search-results-item-flight-section-path-line-end">
                                          <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                          <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                          <div class="theme-search-results-item-flight-section-path-line-title">EWR</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-3 ">
                                      <div class="theme-search-results-item-flight-section-meta">
                                        <p class="theme-search-results-item-flight-section-meta-time">01:20
                                          <span>pm</span>
                                        </p>
                                        <p class="theme-search-results-item-flight-section-meta-city">{{explode(',', $flight->to)[0]}}</p>
                                        <p class="theme-search-results-item-flight-section-meta-date">{{date('M j, Y', strtotime($flight->arrival))}}</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <h5 class="theme-search-results-item-flight-section-airline-title">Operated by {{$flight->airline}}</h5>
                          </div>
                          @if(!empty($flight->return))
                          <div class="theme-search-results-item-flight-section">
                            <div class="row row-no-gutter row-eq-height">
                              <div class="col-md-2 ">
                                <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                  <img class="theme-search-results-item-flight-section-airline-logo" src="{{asset('img/310x304.png')}}" alt="Image Alternative text" title="Image Title"/>
                                </div>
                              </div>
                              <div class="col-md-10 ">
                                <div class="theme-search-results-item-flight-section-item">
                                  <div class="row">
                                    <div class="col-md-3 ">
                                      <div class="theme-search-results-item-flight-section-meta">
                                        <p class="theme-search-results-item-flight-section-meta-time">12:10
                                          <span>am</span>
                                        </p>
                                        <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                        <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                      </div>
                                    </div>
                                    <div class="col-md-6 ">
                                      <div class="theme-search-results-item-flight-section-path">
                                        <div class="theme-search-results-item-flight-section-path-fly-time">
                                          <p>16h 40m</p>
                                        </div>
                                        <div class="theme-search-results-item-flight-section-path-line"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-start">
                                          <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                          <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                          <div class="theme-search-results-item-flight-section-path-line-title">LCW</div>
                                        </div>
                                        <div class="theme-search-results-item-flight-section-path-line-end">
                                          <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                          <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                          <div class="theme-search-results-item-flight-section-path-line-title">LGA</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-3 ">
                                      <div class="theme-search-results-item-flight-section-meta">
                                        <p class="theme-search-results-item-flight-section-meta-time">04:50
                                          <span>am</span>
                                        </p>
                                        <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                        <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <h5 class="theme-search-results-item-flight-section-airline-title">Operated by American Airlines</h5>
                          </div>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-2 ">
                        <div class="theme-search-results-item-book">
                          <div class="theme-search-results-item-price">
                            <p class="theme-search-results-item-price-tag">$ {{$flight->price}}</p>
                            <p class="theme-search-results-item-price-sign">{{$flight->class}}</p>
                          </div>
                          <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="{{url('book?flight='.$flight->id.'&seats='.explode(' ', app('request')->query('seats', 1))[0])}}">Book Now</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-{{$flight->id}}">
                    <div class="theme-search-results-item-extend">
                      <a class="theme-search-results-item-extend-close" href="#searchResultsItem-{{$flight->id}}" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-{{$flight->id}}">&#10005;</a>
                      <div class="theme-search-results-item-extend-inner">
                        <div class="theme-search-results-item-flight-detail-items">
                          <div class="theme-search-results-item-flight-details">
                            <div class="row">
                              <div class="col-md-3 ">
                                <div class="theme-search-results-item-flight-details-info">
                                  <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                  <p class="theme-search-results-item-flight-details-info-date">{{explode(',', $flight->from)[0]}}</p>
                                  <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                  <p class="theme-search-results-item-flight-details-info-fly-time">17h 50m</p>
                                  <p class="theme-search-results-item-flight-details-info-stops">non-stop</p>
                                </div>
                              </div>
                              <div class="col-md-9 ">
                                <div class="theme-search-results-item-flight-details-schedule">
                                  <ul class="theme-search-results-item-flight-details-schedule-list">
                                    <li>
                                      <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                      <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                      <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                      <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">07:30
                                          <span>pm</span>
                                        </span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">01:20
                                          <span>pm</span>
                                        </span>
                                      </div>
                                      <p class="theme-search-results-item-flight-details-schedule-fly-time">17h 50m</p>
                                      <div class="theme-search-results-item-flight-details-schedule-destination">
                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                          <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                            <b>CLY</b>City
                                          </p>
                                          <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                        </div>
                                        <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                          <span>&rarr;</span>
                                        </div>
                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                          <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                            <b>EWR</b>Newark Liberty
                                          </p>
                                          <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                        </div>
                                      </div>
                                      <ul class="theme-search-results-item-flight-details-schedule-features">
                                        <li>6845 Virgin</li>
                                        <li>Wide-body jet</li>
                                        <li>Boeing 777</li>
                                      </ul>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="theme-search-results-item-flight-details">
                            <div class="row">
                              <div class="col-md-3 ">
                                <div class="theme-search-results-item-flight-details-info">
                                  <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                  <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                  <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                  <p class="theme-search-results-item-flight-details-info-fly-time">16h 40m</p>
                                  <p class="theme-search-results-item-flight-details-info-stops">non-stop</p>
                                </div>
                              </div>
                              <div class="col-md-9 ">
                                <div class="theme-search-results-item-flight-details-schedule">
                                  <ul class="theme-search-results-item-flight-details-schedule-list">
                                    <li>
                                      <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                      <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                      <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                      <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">12:10
                                          <span>am</span>
                                        </span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">04:50
                                          <span>am</span>
                                        </span>
                                      </div>
                                      <p class="theme-search-results-item-flight-details-schedule-fly-time">16h 40m</p>
                                      <div class="theme-search-results-item-flight-details-schedule-destination">
                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                          <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                            <b>LCW</b>Gatwich
                                          </p>
                                          <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                        </div>
                                        <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                          <span>&rarr;</span>
                                        </div>
                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                          <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                            <b>LGA</b>LaGuardia
                                          </p>
                                          <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                        </div>
                                      </div>
                                      <ul class="theme-search-results-item-flight-details-schedule-features">
                                        <li>7612 American</li>
                                        <li>Narrow-body jet</li>
                                        <li>Boeing 777-200</li>
                                      </ul>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
              <div class="theme-search-results-mobile-filters" id="mobileFilters">
                <a class="theme-search-results-mobile-filters-btn magnific-inline" href="#MobileFilters">
                  <i class="fa fa-filter"></i>Filters
                </a>
                <div class="magnific-popup mfp-hide" id="MobileFilters">
                  <div class="theme-search-results-sidebar">
                    <div class="theme-search-results-sidebar-sections">
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Stops</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">nonstop</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$369</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">1 stop</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$284</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">2 stops</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$492</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Flight Class</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Economy</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$273</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Business</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$171</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">First</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$399</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Price</h5>
                        <div class="theme-search-results-sidebar-section-price">
                          <input id="price-slider-mob" name="price-slider" data-min="100" data-max="500"/>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Take-off London</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Morning
                                  <span class="icheck-sub-title">05:00am - 11:59am</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$287</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Afternoon
                                  <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$212</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Evening
                                  <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$445</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Landing New York</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Morning
                                  <span class="icheck-sub-title">05:00am - 11:59am</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$259</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Afternoon
                                  <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$468</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Evening
                                  <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$367</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Take-off New York</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Morning
                                  <span class="icheck-sub-title">05:00am - 11:59am</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$177</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Afternoon
                                  <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$354</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Evening
                                  <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$242</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Landing London</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Morning
                                  <span class="icheck-sub-title">05:00am - 11:59am</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$219</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Afternoon
                                  <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$268</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Evening
                                  <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                                </span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$470</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">London Airport</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">CLY: City</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$321</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">LHR: Heathrow</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$110</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">LCW: Gatwich</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$196</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">STN: Stansed</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$281</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">SEN: Southend</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$329</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">New York Airport</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">JFK: John F. Kennedy</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$287</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">LGA: LaGuardia</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$372</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">EWR: Newark Liberty</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$427</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="theme-search-results-sidebar-section">
                        <h5 class="theme-search-results-sidebar-section-title">Airlines</h5>
                        <div class="theme-search-results-sidebar-section-checkbox-list">
                          <div class="theme-search-results-sidebar-section-checkbox-list-items">
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">KLM Royal Dutch...</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$421</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">LOT Polish Airlines</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$117</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Wow Airlines</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$230</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Virgin Atlantic...</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$244</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Delta Airlines</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$427</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">SWISS Airlines</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$375</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Lufthansa</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$204</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">American Airlines</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$150</span>
                            </div>
                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                              <label class="icheck-label">
                                <input class="icheck" type="checkbox"/>
                                <span class="icheck-title">Fly Emirates</span>
                              </label>
                              <span class="theme-search-results-sidebar-section-checkbox-list-amount">$229</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn _tt-uc _fs-sm btn-dark btn-block btn-lg" href="#">Load More Results</a>
            @endif
          </div>
          <div class="col-md-2-5 ">
            <div class="sticky-col _mob-h">
              <div class="theme-ad _mb-20">
                <a class="theme-ad-link" href="#"></a>
                <p class="theme-ad-sign">Advertisement</p>
                <img class="theme-ad-img" src="{{asset('img/300x800.png')}}" alt="Image Alternative text" title="Image Title"/>
              </div>
              <div class="theme-ad">
                <a class="theme-ad-link" href="#"></a>
                <p class="theme-ad-sign">Advertisement</p>
                <img class="theme-ad-img" src="{{asset('img/300x500.png')}}" alt="Image Alternative text" title="Image Title"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
