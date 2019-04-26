@extends('layouts.app')

@section('content')
    <div class="theme-page-section theme-page-section-gray theme-page-section-lg">
      <div class="container">
        <div class="row">
        <div class="col-md-2-5 ">
          <div class="theme-account-sidebar">
            <div class="theme-account-avatar">
              <img class="theme-account-avatar-img" src="{{asset('img/70x70.png')}}" alt="Image Alternative text" title="Image Title"/>
              <p class="theme-account-avatar-name">Welcome,
                <br/>{{Auth::user()->name}}
              </p>
            </div>
            <nav class="theme-account-nav">
              <ul class="theme-account-nav-list">
                <li>
                  <a href="{{url('account')}}">
                    <i class="fa fa-cog"></i>Preferences
                  </a>
                </li>
                <li>
                  <a href="{{url('account/notifications')}}">
                    <i class="fa fa-bell"></i>Notifications
                  </a>
                </li>
                <li>
                  <a href="{{url('account/cards')}}">
                    <i class="fa fa-credit-card"></i>Payment Methods
                  </a>
                </li>
                <li>
                  <a href="{{url('account/travelers')}}">
                    <i class="fa fa-user-circle-o"></i>Travelers
                  </a>
                </li>
                <li>
                  <a href="{{url('account/history')}}">
                    <i class="fa fa-history"></i>History
                  </a>
                </li>
                <li class="active">
                  <a href="{{url('account/bookmarks')}}">
                    <i class="fa fa-bookmark"></i>Bookmarks
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
          <div class="col-md-9-5 ">
            <h1 class="theme-account-page-title">Saved Items</h1>
            <div class="theme-account-bookmarks-item">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-thumb">
                    <a class="theme-account-bookmarks-item-thumb-link" href="#"></a>
                    <div class="row row-eq-height" data-gutter="none">
                      <div class="col-md-3 ">
                        <div class="banner theme-account-bookmarks-item-img banner-sqr banner-">
                          <div class="banner-bg" style="background-image:url(./img/315x225.png);"></div>
                          <a class="banner-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-9 ">
                        <div class="theme-account-bookmarks-item-thumb-body">
                          <div class="row">
                            <div class="col-xs-9 ">
                              <p class="theme-account-bookmarks-item-location">Hotel in New York</p>
                              <h5 class="theme-account-bookmarks-item-title">Park Central New York</h5>
                            </div>
                            <div class="col-xs-3 ">
                              <p class="theme-account-bookmarks-item-price">$109</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-info">
                    <p class="theme-account-bookmarks-item-date">Saved on June 23, 2018</p>
                    <ul class="theme-account-bookmarks-item-actions">
                      <li>
                        <a href="#">
                          <i class="lin lin-menu theme-account-bookmarks-item-action-icon"></i>See all
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-share theme-account-bookmarks-item-action-icon"></i>Share
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-trash theme-account-bookmarks-item-action-icon"></i>Delete
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="theme-account-bookmarks-item">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-thumb">
                    <a class="theme-account-bookmarks-item-thumb-link" href="#"></a>
                    <div class="row row-eq-height" data-gutter="none">
                      <div class="col-md-3 ">
                        <div class="banner theme-account-bookmarks-item-img banner-sqr banner-">
                          <div class="banner-bg" style="background-image:url(./img/315x225.png);"></div>
                          <a class="banner-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-9 ">
                        <div class="theme-account-bookmarks-item-thumb-body">
                          <div class="row">
                            <div class="col-xs-9 ">
                              <p class="theme-account-bookmarks-item-location">Hotel in Lodon</p>
                              <h5 class="theme-account-bookmarks-item-title">11 Howard</h5>
                            </div>
                            <div class="col-xs-3 ">
                              <p class="theme-account-bookmarks-item-price">$100</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-info">
                    <p class="theme-account-bookmarks-item-date">Saved on June 17, 2018</p>
                    <ul class="theme-account-bookmarks-item-actions">
                      <li>
                        <a href="#">
                          <i class="lin lin-menu theme-account-bookmarks-item-action-icon"></i>See all
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-share theme-account-bookmarks-item-action-icon"></i>Share
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-trash theme-account-bookmarks-item-action-icon"></i>Delete
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="theme-account-bookmarks-item">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-thumb">
                    <a class="theme-account-bookmarks-item-thumb-link" href="#"></a>
                    <div class="row row-eq-height" data-gutter="none">
                      <div class="col-md-3 ">
                        <div class="banner theme-account-bookmarks-item-img banner-sqr banner-">
                          <div class="banner-bg" style="background-image:url(./img/315x225.png);"></div>
                          <a class="banner-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-9 ">
                        <div class="theme-account-bookmarks-item-thumb-body">
                          <div class="row">
                            <div class="col-xs-9 ">
                              <p class="theme-account-bookmarks-item-location">Experience in New York</p>
                              <h5 class="theme-account-bookmarks-item-title">Blood and Tears: Horror Walking Tour</h5>
                            </div>
                            <div class="col-xs-3 ">
                              <p class="theme-account-bookmarks-item-price">$158</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-info">
                    <p class="theme-account-bookmarks-item-date">Saved on June 14, 2018</p>
                    <ul class="theme-account-bookmarks-item-actions">
                      <li>
                        <a href="#">
                          <i class="lin lin-menu theme-account-bookmarks-item-action-icon"></i>See all
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-share theme-account-bookmarks-item-action-icon"></i>Share
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-trash theme-account-bookmarks-item-action-icon"></i>Delete
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="theme-account-bookmarks-item">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-thumb">
                    <a class="theme-account-bookmarks-item-thumb-link" href="#"></a>
                    <div class="row row-eq-height" data-gutter="none">
                      <div class="col-md-3 ">
                        <div class="banner theme-account-bookmarks-item-img banner-sqr banner-">
                          <div class="banner-bg" style="background-image:url(./img/315x225.png);"></div>
                          <a class="banner-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-9 ">
                        <div class="theme-account-bookmarks-item-thumb-body">
                          <div class="row">
                            <div class="col-xs-9 ">
                              <p class="theme-account-bookmarks-item-location">Room in Paris</p>
                              <h5 class="theme-account-bookmarks-item-title">Zen Paris</h5>
                            </div>
                            <div class="col-xs-3 ">
                              <p class="theme-account-bookmarks-item-price">$256</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-info">
                    <p class="theme-account-bookmarks-item-date">Saved on June 10, 2018</p>
                    <ul class="theme-account-bookmarks-item-actions">
                      <li>
                        <a href="#">
                          <i class="lin lin-menu theme-account-bookmarks-item-action-icon"></i>See all
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-share theme-account-bookmarks-item-action-icon"></i>Share
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-trash theme-account-bookmarks-item-action-icon"></i>Delete
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="theme-account-bookmarks-item">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-thumb">
                    <a class="theme-account-bookmarks-item-thumb-link" href="#"></a>
                    <div class="row row-eq-height" data-gutter="none">
                      <div class="col-md-3 ">
                        <div class="banner theme-account-bookmarks-item-img banner-sqr banner-">
                          <div class="banner-bg" style="background-image:url(./img/315x225.png);"></div>
                          <a class="banner-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-9 ">
                        <div class="theme-account-bookmarks-item-thumb-body">
                          <div class="row">
                            <div class="col-xs-9 ">
                              <p class="theme-account-bookmarks-item-location">Hotel in Lodon</p>
                              <h5 class="theme-account-bookmarks-item-title">NoMo SoHo</h5>
                            </div>
                            <div class="col-xs-3 ">
                              <p class="theme-account-bookmarks-item-price">$139</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-info">
                    <p class="theme-account-bookmarks-item-date">Saved on June 04, 2018</p>
                    <ul class="theme-account-bookmarks-item-actions">
                      <li>
                        <a href="#">
                          <i class="lin lin-menu theme-account-bookmarks-item-action-icon"></i>See all
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-share theme-account-bookmarks-item-action-icon"></i>Share
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-trash theme-account-bookmarks-item-action-icon"></i>Delete
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="theme-account-bookmarks-item">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-thumb">
                    <a class="theme-account-bookmarks-item-thumb-link" href="#"></a>
                    <div class="row row-eq-height" data-gutter="none">
                      <div class="col-md-3 ">
                        <div class="banner theme-account-bookmarks-item-img banner-sqr banner-">
                          <div class="banner-bg" style="background-image:url(./img/315x225.png);"></div>
                          <a class="banner-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-9 ">
                        <div class="theme-account-bookmarks-item-thumb-body">
                          <div class="row">
                            <div class="col-xs-9 ">
                              <p class="theme-account-bookmarks-item-location">Room in Lodon</p>
                              <h5 class="theme-account-bookmarks-item-title">Studio Center of Paris</h5>
                            </div>
                            <div class="col-xs-3 ">
                              <p class="theme-account-bookmarks-item-price">$261</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-info">
                    <p class="theme-account-bookmarks-item-date">Saved on May 28, 2018</p>
                    <ul class="theme-account-bookmarks-item-actions">
                      <li>
                        <a href="#">
                          <i class="lin lin-menu theme-account-bookmarks-item-action-icon"></i>See all
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-share theme-account-bookmarks-item-action-icon"></i>Share
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-trash theme-account-bookmarks-item-action-icon"></i>Delete
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="theme-account-bookmarks-item">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-thumb">
                    <a class="theme-account-bookmarks-item-thumb-link" href="#"></a>
                    <div class="row row-eq-height" data-gutter="none">
                      <div class="col-md-3 ">
                        <div class="banner theme-account-bookmarks-item-img banner-sqr banner-">
                          <div class="banner-bg" style="background-image:url(./img/315x225.png);"></div>
                          <a class="banner-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-9 ">
                        <div class="theme-account-bookmarks-item-thumb-body">
                          <div class="row">
                            <div class="col-xs-9 ">
                              <p class="theme-account-bookmarks-item-location">Experience in New York</p>
                              <h5 class="theme-account-bookmarks-item-title">Great live jazz, beautiful setting.</h5>
                            </div>
                            <div class="col-xs-3 ">
                              <p class="theme-account-bookmarks-item-price">$104</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-info">
                    <p class="theme-account-bookmarks-item-date">Saved on May 23, 2018</p>
                    <ul class="theme-account-bookmarks-item-actions">
                      <li>
                        <a href="#">
                          <i class="lin lin-menu theme-account-bookmarks-item-action-icon"></i>See all
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-share theme-account-bookmarks-item-action-icon"></i>Share
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-trash theme-account-bookmarks-item-action-icon"></i>Delete
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="theme-account-bookmarks-item">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-thumb">
                    <a class="theme-account-bookmarks-item-thumb-link" href="#"></a>
                    <div class="row row-eq-height" data-gutter="none">
                      <div class="col-md-3 ">
                        <div class="banner theme-account-bookmarks-item-img banner-sqr banner-">
                          <div class="banner-bg" style="background-image:url(./img/315x225.png);"></div>
                          <a class="banner-link" href="#"></a>
                        </div>
                      </div>
                      <div class="col-md-9 ">
                        <div class="theme-account-bookmarks-item-thumb-body">
                          <div class="row">
                            <div class="col-xs-9 ">
                              <p class="theme-account-bookmarks-item-location">Experience in Lodon</p>
                              <h5 class="theme-account-bookmarks-item-title">Learn to make sushi and poke with a chef</h5>
                            </div>
                            <div class="col-xs-3 ">
                              <p class="theme-account-bookmarks-item-price">$159</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="theme-account-bookmarks-item-info">
                    <p class="theme-account-bookmarks-item-date">Saved on May 22, 2018</p>
                    <ul class="theme-account-bookmarks-item-actions">
                      <li>
                        <a href="#">
                          <i class="lin lin-menu theme-account-bookmarks-item-action-icon"></i>See all
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-share theme-account-bookmarks-item-action-icon"></i>Share
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="lin lin-trash theme-account-bookmarks-item-action-icon"></i>Delete
                        </a>
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
@endsection
