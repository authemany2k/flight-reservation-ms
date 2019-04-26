@extends('layouts.app')

@section('content')
    <div class="theme-page-section theme-page-section-xl theme-page-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="theme-payment-success">
              <div class="theme-payment-success-header">
                <i class="fa fa-check-circle theme-payment-success-header-icon"></i>
                <h1 class="theme-payment-success-title">Booking Successful</h1>
<!--                 <p class="theme-payment-success-subtitle">We have emailed you the receipt.</p> -->
              </div>
              <div class="theme-payment-success-box">
                <ul class="theme-payment-success-summary">
                  <li>Payment ID
                    <span>#7249874</span>
                  </li>
                  <li>Date
                    <span>{{date('d/m/Y H:ia')}}</span>
                  </li>
                  <li>Customer
                    <span>{{Auth::user()->name}}</span>
                  </li>
                  <li>Paid to
                    <span>Safiri Booking</span>
                  </li>
                  <li>Payment method
                    <span>Mpesa</span>
                  </li>
                  <li>Subject
                    <span>Kisumu - Nairobi</span>
                  </li>
                  <li>Amount paid
                    <span>$700.85</span>
                  </li>
                </ul>
                <p class="theme-payment-success-check-order">You can check your order details in your
                  <a href="{{url('account/history')}}">account page</a>.
                </p>
              </div>
              <ul class="theme-payment-success-actions">
                <li>
                  <a href="#">
                    <i class="fa fa-file-pdf-o"></i>
                    <p>PDF
                      <br/>receipt
                    </p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-print"></i>
                    <p>Print
                      <br/>receipt
                    </p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-envelope-o"></i>
                    <p>SMS
                      <br/>receipt
                    </p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
