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
                <li class="active">
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
                <li>
                  <a href="{{url('account/bookmarks')}}">
                    <i class="fa fa-bookmark"></i>Bookmarks
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-md-9-5 ">
          <h1 class="theme-account-page-title">My Account</h1>
          <div class="row">
            <div class="col-md-9 ">
              <div class="theme-account-preferences">
                <div class="theme-account-preferences-item">
                  <div class="row">
                    <div class="col-md-3 ">
                      <h5 class="theme-account-preferences-item-title">Email Address</h5>
                    </div>
                    <div class="col-md-7 ">
                      <p class="theme-account-preferences-item-value">{{Auth::user()->email}}</p>
                    </div>
                  </div>
                </div>
                <div class="theme-account-preferences-item">
                  <div class="row">
                    <div class="col-md-3 ">
                      <h5 class="theme-account-preferences-item-title">Home Airport</h5>
                    </div>
                    <div class="col-md-7 ">
                      <p class="theme-account-preferences-item-value">London, United Kingdom - Heathrow (LHR)</p>
                      <div class="collapse" id="ChangeHomeAirportChange">
                        <div class="theme-account-preferences-item-change">
                          <p class="theme-account-preferences-item-change-description">Default Airport for flight search home location</p>
                          <div class="form-group theme-account-preferences-item-change-form">
                            <input class="form-control" type="text" value="London, United Kingdom - Heathrow (LHR)"/>
                          </div>
                          <div class="theme-account-preferences-item-change-actions">
                            <a class="btn btn-sm btn-primary" href="#">Save changes</a>
                            <a class="btn btn-sm btn-default" href="#ChangeHomeAirportChange" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeHomeAirportChange">Cancel</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <a class="theme-account-preferences-item-change-link" href="#ChangeHomeAirportChange" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeHomeAirportChange">
                        <i class="fa fa-pencil"></i>edit
                      </a>
                    </div>
                  </div>
                </div>
                <div class="theme-account-preferences-item">
                  <div class="row">
                    <div class="col-md-3 ">
                      <h5 class="theme-account-preferences-item-title">Email Site</h5>
                    </div>
                    <div class="col-md-7 ">
                      <p class="theme-account-preferences-item-value">London, United Kingdom</p>
                      <div class="collapse" id="ChangeHomeSite">
                        <div class="theme-account-preferences-item-change">
                          <p class="theme-account-preferences-item-change-description">Used for price alerts and email subscriptions.</p>
                          <div class="form-group theme-account-preferences-item-change-form">
                            <input class="form-control" type="text" value="London, United Kingdom"/>
                          </div>
                          <div class="theme-account-preferences-item-change-actions">
                            <a class="btn btn-sm btn-primary" href="#">Save changes</a>
                            <a class="btn btn-sm btn-default" href="#ChangeHomeSite" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeHomeSite">Cancel</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <a class="theme-account-preferences-item-change-link" href="#ChangeHomeSite" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeHomeSite">
                        <i class="fa fa-pencil"></i>edit
                      </a>
                    </div>
                  </div>
                </div>
                <div class="theme-account-preferences-item">
                  <div class="row">
                    <div class="col-md-3 ">
                      <h5 class="theme-account-preferences-item-title">Password</h5>
                    </div>
                    <div class="col-md-7 ">
                      <p class="theme-account-preferences-item-value">********</p>
                      <div class="collapse" id="ChangePassword">
                        <div class="theme-account-preferences-item-change">
                          <p class="theme-account-preferences-item-change-description">It's a good idea to use a strong password
                            <br/>that you're not using elsewhere
                          </p>
                          <div class="form-group theme-account-preferences-item-change-form">
                            <label>Current Password</label>
                            <input class="form-control" type="password"/>
                            <label>New Password</label>
                            <input class="form-control" type="password"/>
                            <label>Re-type New Password</label>
                            <input class="form-control" type="password"/>
                          </div>
                          <div class="theme-account-preferences-item-change-actions">
                            <a class="btn btn-sm btn-primary" href="#">Save changes</a>
                            <a class="btn btn-sm btn-default" href="#ChangePassword" data-toggle="collapse" aria-expanded="false" aria-controls="ChangePassword">Cancel</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <a class="theme-account-preferences-item-change-link" href="#ChangePassword" data-toggle="collapse" aria-expanded="false" aria-controls="ChangePassword">
                        <i class="fa fa-pencil"></i>edit
                      </a>
                    </div>
                  </div>
                </div>
                <div class="theme-account-preferences-item">
                  <div class="row">
                    <div class="col-md-3 ">
                      <h5 class="theme-account-preferences-item-title">Default Language</h5>
                    </div>
                    <div class="col-md-7 ">
                      <p class="theme-account-preferences-item-value">English (EN)</p>
                      <div class="collapse" id="ChangeLanguage">
                        <div class="theme-account-preferences-item-change">
                          <div class="form-group theme-account-preferences-item-change-form">
                            <select class="form-control">
                              <option>English (EN)</option>
                            </select>
                          </div>
                          <div class="theme-account-preferences-item-change-actions">
                            <a class="btn btn-sm btn-primary" href="#">Save changes</a>
                            <a class="btn btn-sm btn-default" href="#ChangeLanguage" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeLanguage">Cancel</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <a class="theme-account-preferences-item-change-link" href="#ChangeLanguage" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeLanguage">
                        <i class="fa fa-pencil"></i>edit
                      </a>
                    </div>
                  </div>
                </div>
                <div class="theme-account-preferences-item">
                  <div class="row">
                    <div class="col-md-3 ">
                      <h5 class="theme-account-preferences-item-title">Default Currency</h5>
                    </div>
                    <div class="col-md-7 ">
                      <p class="theme-account-preferences-item-value">United States Dollars (USD)</p>
                      <div class="collapse" id="ChangeCurrency">
                        <div class="theme-account-preferences-item-change">
                          <div class="form-group theme-account-preferences-item-change-form">
                            <select class="form-control">
                              <option>United States Dollars (USD)</option>
                            </select>
                          </div>
                          <div class="theme-account-preferences-item-change-actions">
                            <a class="btn btn-sm btn-primary" href="#">Save changes</a>
                            <a class="btn btn-sm btn-default" href="#ChangeCurrency" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeCurrency">Cancel</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 ">
                      <a class="theme-account-preferences-item-change-link" href="#ChangeCurrency" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeCurrency">
                        <i class="fa fa-pencil"></i>edit
                      </a>
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
@endsection
