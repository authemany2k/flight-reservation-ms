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
                <li class="active">
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
            <h1 class="theme-account-page-title">Travelers</h1>
            <div class="row row-col-gap" data-gutter="20">
              <div class="col-md-6 ">
                <div class="theme-account-traveler">
                  <i class="theme-account-traveler-icon" style="background-color: #ff0066;">J</i>
                  <div class="theme-account-traveler-body">
                    <p class="theme-account-traveler-name">John Doe</p>
                    <ul class="theme-account-traveler-details">
                      <li>john_doe772@gmail.com</li>
                      <li>+1 690 546 1420</li>
                      <li>United States</li>
                    </ul>
                    <ul class="theme-account-traveler-actions">
                      <li>
                        <a href="#">Edit</a>
                      </li>
                      <li>
                        <a href="#">Delete</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ">
                <div class="theme-account-traveler">
                  <i class="theme-account-traveler-icon" style="background-color: #0000ff;">M</i>
                  <div class="theme-account-traveler-body">
                    <p class="theme-account-traveler-name">Maya Smith</p>
                    <ul class="theme-account-traveler-details">
                      <li>hello_maya95@yahoo.com</li>
                      <li>+1 332 072 4818</li>
                      <li>United States</li>
                    </ul>
                    <ul class="theme-account-traveler-actions">
                      <li>
                        <a href="#">Edit</a>
                      </li>
                      <li>
                        <a href="#">Delete</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ">
                <div class="theme-account-traveler">
                  <i class="theme-account-traveler-icon" style="background-color: #ffbf00;">T</i>
                  <div class="theme-account-traveler-body">
                    <p class="theme-account-traveler-name">Tommy Jones</p>
                    <ul class="theme-account-traveler-details">
                      <li>tommy238123@gmail.com</li>
                      <li>+1 843 615 9343</li>
                      <li>United States</li>
                    </ul>
                    <ul class="theme-account-traveler-actions">
                      <li>
                        <a href="#">Edit</a>
                      </li>
                      <li>
                        <a href="#">Delete</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ">
                <div class="theme-account-traveler">
                  <i class="theme-account-traveler-icon" style="background-color: #bf00ff;">L</i>
                  <div class="theme-account-traveler-body">
                    <p class="theme-account-traveler-name">Lucy Doe</p>
                    <ul class="theme-account-traveler-details">
                      <li>lucy_kitty_11@gmail.com</li>
                      <li>+1 222 412 3168</li>
                      <li>United States</li>
                    </ul>
                    <ul class="theme-account-traveler-actions">
                      <li>
                        <a href="#">Edit</a>
                      </li>
                      <li>
                        <a href="#">Delete</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ">
                <div class="theme-account-traveler">
                  <i class="theme-account-traveler-icon" style="background-color: #009933;">D</i>
                  <div class="theme-account-traveler-body">
                    <p class="theme-account-traveler-name">Danny White</p>
                    <ul class="theme-account-traveler-details">
                      <li>danny___white@gmail.com</li>
                      <li>+1 322 054 1389</li>
                      <li>United States</li>
                    </ul>
                    <ul class="theme-account-traveler-actions">
                      <li>
                        <a href="#">Edit</a>
                      </li>
                      <li>
                        <a href="#">Delete</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ">
                <div class="theme-account-traveler">
                  <a class="theme-account-traveler-link-mask" href="#"></a>
                  <p class="theme-account-traveler-add-new">+ Add New Traveler</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
