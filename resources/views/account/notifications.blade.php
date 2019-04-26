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
                <li class="active">
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
            <h1 class="theme-account-page-title">Notifications</h1>
            <h4 class="theme-account-notifications-title">Select subscriptions to be delivered to john_doe772@gmail.com:</h4>
            <div class="theme-account-notifications">
              <div class="theme-account-notifications-item">
                <label class="icheck-label">
                  <input class="icheck" type="checkbox"/>
                  <span class="icheck-title">Announcements
                    <span class="icheck-sub-title">Be the first to know about new features and other news (sent quarterly)</span>
                  </span>
                </label>
              </div>
              <div class="theme-account-notifications-item">
                <label class="icheck-label">
                  <input class="icheck" type="checkbox"/>
                  <span class="icheck-title">Special Offers
                    <span class="icheck-sub-title">Receive last-minute offers from our travel partners (sent periodically)</span>
                  </span>
                </label>
              </div>
              <div class="theme-account-notifications-item">
                <label class="icheck-label">
                  <input class="icheck" type="checkbox"/>
                  <span class="icheck-title">Travel Deals Newsletter
                    <span class="icheck-sub-title">Stay on top of the best travel deals, offers and discounts we have found (sent periodically)</span>
                  </span>
                </label>
              </div>
              <div class="theme-account-notifications-item">
                <label class="icheck-label">
                  <input class="icheck" type="checkbox"/>
                  <span class="icheck-title">Review Surveys
                    <span class="icheck-sub-title">Share your travel experience to better inform users</span>
                  </span>
                </label>
              </div>
              <div class="theme-account-notifications-item">
                <label class="icheck-label">
                  <input class="icheck" type="checkbox"/>
                  <span class="icheck-title">Personalized Recommendations
                    <span class="icheck-sub-title">Customized travel deals tailored to help you plan every part of a trip you book through Bookify (sent periodically)</span>
                  </span>
                </label>
              </div>
              <div class="theme-account-notifications-item">
                <label class="icheck-label">
                  <input class="icheck" type="checkbox"/>
                  <span class="icheck-title">Reminders
                    <span class="icheck-sub-title">See the latest prices for the travel deals you were searching (sent periodically)</span>
                  </span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
