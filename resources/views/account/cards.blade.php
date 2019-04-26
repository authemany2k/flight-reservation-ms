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
                <li class="active">
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
            <h1 class="theme-account-page-title">Credit/Debit Cards</h1>
            <div class="row row-col-gap" data-gutter="20">
              <div class="col-md-4 ">
                <div class="theme-account-card theme-account-card-primary">
                  <div class="theme-account-card-mask">
                    <ul class="theme-account-card-actions">
                      <li>
                        <a href="#">
                          <i class="fa fa-pencil"></i>Edit
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-times"></i>Delete
                        </a>
                      </li>
                    </ul>
                  </div>
                  <p class="theme-account-card-number">**** **** **** **** 5518</p>
                  <div class="theme-account-card-expire">
                    <span class="theme-account-card-expire-end">valid
                      <br/>thru
                    </span>
                    <span class="theme-account-card-expire-date">8/20</span>
                  </div>
                  <div class="theme-account-card-name">
                    <p>JOHN DOE</p>
                  </div>
                  <img class="theme-account-card-logo" src="./img/51x32.png" alt="Image Alternative text" title="Image Title"/>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="theme-account-card">
                  <div class="theme-account-card-mask">
                    <ul class="theme-account-card-actions">
                      <li>
                        <a href="#">
                          <i class="fa fa-pencil"></i>Edit
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-times"></i>Delete
                        </a>
                      </li>
                    </ul>
                  </div>
                  <p class="theme-account-card-number">**** **** **** **** 5132</p>
                  <div class="theme-account-card-expire">
                    <span class="theme-account-card-expire-end">valid
                      <br/>thru
                    </span>
                    <span class="theme-account-card-expire-date">6/20</span>
                  </div>
                  <div class="theme-account-card-name">
                    <p>JOHN DOE</p>
                  </div>
                  <img class="theme-account-card-logo" src="./img/51x32.png" alt="Image Alternative text" title="Image Title"/>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="theme-account-card">
                  <div class="theme-account-card-mask">
                    <ul class="theme-account-card-actions">
                      <li>
                        <a href="#">
                          <i class="fa fa-pencil"></i>Edit
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-times"></i>Delete
                        </a>
                      </li>
                    </ul>
                  </div>
                  <p class="theme-account-card-number">**** **** **** **** 5038</p>
                  <div class="theme-account-card-expire">
                    <span class="theme-account-card-expire-end">valid
                      <br/>thru
                    </span>
                    <span class="theme-account-card-expire-date">1/19</span>
                  </div>
                  <div class="theme-account-card-name">
                    <p>JOHN DOE</p>
                  </div>
                  <img class="theme-account-card-logo" src="./img/51x32.png" alt="Image Alternative text" title="Image Title"/>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="theme-account-card">
                  <div class="theme-account-card-mask">
                    <ul class="theme-account-card-actions">
                      <li>
                        <a href="#">
                          <i class="fa fa-pencil"></i>Edit
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-times"></i>Delete
                        </a>
                      </li>
                    </ul>
                  </div>
                  <p class="theme-account-card-number">**** **** **** **** 9819</p>
                  <div class="theme-account-card-expire">
                    <span class="theme-account-card-expire-end">valid
                      <br/>thru
                    </span>
                    <span class="theme-account-card-expire-date">1/21</span>
                  </div>
                  <div class="theme-account-card-name">
                    <p>JOHN DOE</p>
                  </div>
                  <img class="theme-account-card-logo" src="./img/51x32.png" alt="Image Alternative text" title="Image Title"/>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="theme-account-card theme-account-card-new">
                  <a class="theme-account-card-mask-link" href="#"></a>
                  <p class="theme-account-card-new-title">+ Add New Card</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
