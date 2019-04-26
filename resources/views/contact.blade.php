@extends('layouts.app')

@section('content')
    <div class="theme-hero-area _h-50vh _h-mob-80vh theme-hero-area-sm">
      <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg" style="background-image:url(./img/1500x800.png);"></div>
        <div class="theme-hero-area-mask theme-hero-area-mask-half"></div>
        <div class="theme-hero-area-inner-shadow"></div>
      </div>
      <div class="theme-hero-area-body">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 theme-page-header-abs">
              <div class="theme-page-header theme-page-header-lg">
                <h1 class="theme-page-header-title">Get In Touch</h1>
                <div class="theme-contact-info">
                  <div class="row row-no-gutter">
                    <div class="col-md-3">
                      <address class="theme-contact-address">21 Chipmunk Lane
                        <br/>Old Town
                        <br/>Maine 04468
                      </address>
                    </div>
                    <div class="col-md-4">
                      <ul class="theme-contact-info-list">
                        <li>
                          <i class="fa fa-phone"></i>207-827-5358
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-envelope"></i>hello@Bookify.com
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
    </div>
    <div class="theme-page-section theme-page-section-xl theme-page-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="theme-contact">
              <h2 class="theme-contact-title">Contact Us</h2>
              <div class="row row-col-mob-gap">
                <div class="col-md-7">
                  <div class="form-group theme-contact-form-group">
                    <input class="form-control" type="text" placeholder="Name"/>
                  </div>
                  <div class="form-group theme-contact-form-group">
                    <input class="form-control" type="text" placeholder="Email"/>
                  </div>
                  <div class="form-group theme-contact-form-group">
                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                  </div>
                  <a class="btn btn-uc btn-primary btn-lg" href="#">Send Your Message</a>
                </div>
                <div class="col-md-5">
                  <div class="google-map theme-contact-map" data-lat="40.7483624" data-lng="-73.9900896" data-tab="false"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
