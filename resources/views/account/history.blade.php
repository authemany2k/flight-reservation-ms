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
                <li class="active">
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
            <h1 class="theme-account-page-title">Booking History</h1>
            <div class="theme-account-history">
              <table class="table">
                <thead>
                  <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Amount</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach(Auth::user()->bookings as $booking)
                  <tr>
                    <td class="theme-account-history-type">
                      <i class="fa fa-plane theme-account-history-type-icon"></i>
                    </td>
                    <td>
                      <p class="theme-account-history-type-title">{{\App\Flight::find($booking->flight_id)->from}} &rarr; {{\App\Flight::find($booking->flight_id)->to}}</p>
                      <a class="theme-account-history-item-name" href="#">Round trip flight</a>
                    </td>
                    <td class="theme-account-history-tr-date">
                      <p class="theme-account-history-date">{{$booking->created_at}}</p>
                    </td>
                    <td>
                      <p class="theme-account-history-item-price">{{\App\Flight::find($booking->flight_id)->price}}</p>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
