<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Safiri - Book Your Flights Conveniently</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/lineicons.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/weather-icons.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-theme @if(app('request')->is('account') || app('request')->is('account/*') || app('request')->is('book') || app('request')->is('success'))navbar-inverse @else navbar-theme-transparent navbar-theme-abs navbar-theme-border @endif" id="main-nav">
      <div class="container">
        <div class="navbar-inner nav">
          <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target="#navbar-main" data-toggle="collapse" type="button" area-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
              <strong>Safiri</strong>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-main">
            <ul class="nav navbar-nav">
              <li class="">
                <a href="{{url('/')}}" >Home</a>
              </li>
              <li class="">
                <a class="dropdown-toggle" href="{{url('about')}}">About</a>
              </li>
              <li class="dropdown">
                <!-- <a class="dropdown-toggle" href="room-index-1.html">Destinations</a> -->
                <div class="dropdown-menu dropdown-menu-xl">
                  <div class="row">
                    <div class="col-md-6">
                      <h5 class="dropdown-meganav-list-title">Suggested Destinations</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="room-index-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="room-index-2.html">Layout 2</a>
                        </li>
                        <li>
                          <a href="room-index-3.html">Layout 3</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <h5 class="dropdown-meganav-list-title">Recently Added</h5>
                      <ul class="dropdown-meganav-list-items">
                        <li>
                          <a href="room-results-1.html">Layout 1</a>
                        </li>
                        <li>
                          <a href="room-results-2.html">Layout 2</a>
                        </li>
                        <li>
                          <a href="room-results-3.html">Layout 3</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="{{ Request::path() == 'flights' ? 'active' : '' }} dropdown">
                <a class="dropdown-toggle" href="{{url('flights')}}">Flights</a>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" href="{{url('contact')}}">Contact Us</a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <!-- <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="_desk-h">Currency</span>
                  <b>USD</b>
                </a> -->
                <div class="dropdown-menu dropdown-menu-xxl">
                  <h5 class="dropdown-meganav-select-list-title">Popular Currencies</h5>
                  <div class="row" data-gutter="10">
                    <div class="col-md-3">
                      <ul class="dropdown-meganav-select-list-currency">
                        <li>
                          <a href="#">
                            <span>€</span>Euro
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>£</span>Pound sterling
                          </a>
                        </li>
                        <li class="active">
                          <a href="#">
                            <span>US$</span>U.S. dollar
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <ul class="dropdown-meganav-select-list-currency">
                        <li>
                          <a href="#">
                            <span>CAD</span>Canadian dollar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>AUD</span>Australian dollar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>RUB</span>Russian Ruble
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <ul class="dropdown-meganav-select-list-currency">
                        <li>
                          <a href="#">
                            <span>S$</span>Singapore dollar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>CNY</span>Chinese yuan
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>¥</span>Japanese yen
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <hr/>
                  <h5 class="dropdown-meganav-select-list-title">All Currencies</h5>
                  <div class="row" data-gutter="10">
                    <div class="col-md-3">
                      <ul class="dropdown-meganav-select-list-currency">
                        <li>
                          <a href="#">
                            <span>AR$</span>Argentine peso
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>AUD</span>Australian dollar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>AZN</span>Azerbaijan, New Ma...
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>BHD</span>Bahrain dinar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>BRL</span>Brazilian real
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>BGN</span>Bulgarian lev
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>CAD</span>Canadian dollar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>XOF</span>CFA Franc BCEAO
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>CL$</span>Chilean peso
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>CNY</span>Chinese yuan
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>COP</span>Colombian peso
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>Kč</span>Czech koruna
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>DKK</span>Danish krone
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <ul class="dropdown-meganav-select-list-currency">
                        <li>
                          <a href="#">
                            <span>EGP</span>Egyptian pound
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>€</span>Euro
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>FJD</span>Fijian dollar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>GEL</span>Georgian lari
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>HK$</span>Hong Kong Dollar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>HUF</span>Hungarian forint
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>Rs.</span>Indian rupee
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>Rp</span>Indonesian rupiah
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>₪</span>Israeli new sheqel
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>¥</span>Japanese yen
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>JOD</span>Jordanian dinar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>KZT</span>Kazakhstani tenge
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>KRW</span>Korean won
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <ul class="dropdown-meganav-select-list-currency">
                        <li>
                          <a href="#">
                            <span>KWD</span>Kuwaiti dinar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>MYR</span>Malaysian ringgit
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>MXN</span>Mexican peso
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>MDL</span>Moldovan leu
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>NAD</span>Namibian Dollar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>TWD</span>New Taiwan Dollar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>NZD</span>New Zealand dollar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>NOK</span>Norwegian krone
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>OMR</span>Omani rial
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>zł</span>Polish zloty
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>£</span>Pound sterling
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>QAR</span>Qatar riyal
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>lei</span>Romanian new leu
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <ul class="dropdown-meganav-select-list-currency">
                        <li>
                          <a href="#">
                            <span>RUB</span>Russian Ruble
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>SAR</span>Saudi Arabian riyal
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>S$</span>Singapore dollar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>ZAR</span>South African rand
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>SEK</span>Swedish krona
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>CHF</span>Swiss franc
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>THB</span>Thai baht
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>TL</span>Turkish lira
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>AED</span>U.A.E. dirham
                          </a>
                        </li>
                        <li class="active">
                          <a href="#">
                            <span>US$</span>U.S. dollar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>UAH</span>Ukraine Hryvnia
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span>UZS</span>Uzbekistan, Sums
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="_desk-h">Language</span>
                  <img class="navbar-flag" src="{{asset('img/flags/USA.png')}}" alt="Image Alternative text" title="Image Title"/>
                </a>
                <div class="dropdown-menu dropdown-menu-xxl">
                  <h5 class="dropdown-meganav-select-list-title">Languages</h5>
                  <div class="row" data-gutter="10">
                    <div class="col-md-3">
                      <ul class="dropdown-meganav-select-list-lang">
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/UK.png')}}" alt="Image Alternative text" title="Image Title"/>English(UK)
                          </a>
                        </li>
                        <li class="active">
                          <a href="#">
                            <img src="{{asset('img/flag_codes/US.png')}}" alt="Image Alternative text" title="Image Title"/>English(US)
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/DE.png')}}" alt="Image Alternative text" title="Image Title"/>Deutsch
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/NED.png')}}" alt="Image Alternative text" title="Image Title"/>Nederlands
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/FR.png')}}" alt="Image Alternative text" title="Image Title"/>Français
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/SP.png')}}" alt="Image Alternative text" title="Image Title"/>Español
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/ARG.png')}}" alt="Image Alternative text" title="Image Title"/>Español (AR)
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/IT.png')}}" alt="Image Alternative text" title="Image Title"/>Italiano
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/PT.png')}}" alt="Image Alternative text" title="Image Title"/>Português (PT)
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/BR.png')}}" alt="Image Alternative text" title="Image Title"/>Português (BR)
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/NR.png')}}" alt="Image Alternative text" title="Image Title"/>Norsk
                          </a>
                        </li>
                      </ul>
                    </div>
                    <!-- <div class="col-md-3">
                      <ul class="dropdown-meganav-select-list-lang">
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/FIN.png')}}" alt="Image Alternative text" title="Image Title"/>Suomi
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/SW.png')}}" alt="Image Alternative text" title="Image Title"/>Svenska
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/DEN.png')}}" alt="Image Alternative text" title="Image Title"/>Dansk
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/CZ.png')}}" alt="Image Alternative text" title="Image Title"/>Čeština
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/HUN.png')}}" alt="Image Alternative text" title="Image Title"/>Magyar
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/ROM.png')}}" alt="Image Alternative text" title="Image Title"/>Română
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/JP.png')}}" alt="Image Alternative text" title="Image Title"/>日本語
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/CN.png')}}" alt="Image Alternative text" title="Image Title"/>简体中文
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/PL.png')}}" alt="Image Alternative text" title="Image Title"/>Polski
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/GR.png')}}" alt="Image Alternative text" title="Image Title"/>Ελληνικά
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/RU.png')}}" alt="Image Alternative text" title="Image Title"/>Русский
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <ul class="dropdown-meganav-select-list-lang">
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/TUR.png')}}" alt="Image Alternative text" title="Image Title"/>Türkçe
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/BUL.png')}}" alt="Image Alternative text" title="Image Title"/>Български
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/ARB.png')}}" alt="Image Alternative text" title="Image Title"/>العربية
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/KOR.png')}}" alt="Image Alternative text" title="Image Title"/>한국어
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/ISR.png')}}" alt="Image Alternative text" title="Image Title"/>עברית
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/LAT.png')}}" alt="Image Alternative text" title="Image Title"/>Latviski
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/UKR.png')}}" alt="Image Alternative text" title="Image Title"/>Українська
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/IND.png')}}" alt="Image Alternative text" title="Image Title"/>Bahasa Indonesia
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/MAL.png')}}" alt="Image Alternative text" title="Image Title"/>Bahasa Malaysia
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/TAI.png')}}" alt="Image Alternative text" title="Image Title"/>ภาษาไทย
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/EST.png')}}" alt="Image Alternative text" title="Image Title"/>Eesti
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <ul class="dropdown-meganav-select-list-lang">
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/CRO.png')}}" alt="Image Alternative text" title="Image Title"/>Hrvatski
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/LIT.png')}}" alt="Image Alternative text" title="Image Title"/>Lietuvių
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/SLO.png')}}" alt="Image Alternative text" title="Image Title"/>Slovenčina
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/SERB.png')}}" alt="Image Alternative text" title="Image Title"/>Srpski
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/SLOVE.png')}}" alt="Image Alternative text" title="Image Title"/>Slovenščina
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/NAM.png')}}" alt="Image Alternative text" title="Image Title"/>Tiếng Việt
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/PHI.png')}}" alt="Image Alternative text" title="Image Title"/>Filipino
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="{{asset('img/flag_codes/ICE.png')}}" alt="Image Alternative text" title="Image Title"/>Íslenska
                          </a>
                        </li>
                      </ul>
                    </div> -->
                  </div>
                </div>
              </li>
              <li class="navbar-nav-item-user dropdown">
                @if(Auth::check())
                <a class="dropdown-toggle" href="account.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user-circle-o navbar-nav-item-user-icon"></i>My Account
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{url('account')}}">Preferences</a>
                  </li>
                  <li>
                    <a href="{{url('account/notifications')}}">Notifications</a>
                  </li>
                  <li>
                    <a href="{{url('account/cards')}}">Payment Methods</a>
                  </li>
                  <li>
                    <a href="{{url('account/travelers')}}">Travelers</a>
                  </li>
                  <li>
                    <a href="{{url('account/history')}}">History</a>
                  </li>
                  <li>
                    <a href="{{url('account/bookmarks')}}">Bookmarks</a>
                  </li>
                  <li>
                    <a href="{{ route('logout') }}" class="has-icon" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-logout"></i> {{ __('Logout') }} </a>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
                @else
                <a class="" href="{{url('login')}}" role="button">
                  <i class="fa fa-user-circle-o navbar-nav-item-user-icon"></i>Login
                </a>
                @endif
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    @yield('content')
    @if(!app('request')->is('/'))
    <div class="theme-footer" id="mainFooter">
      <div class="container _ph-mob-0">
        <div class="row row-eq-height row-mob-full" data-gutter="60">
          <div class="col-md-3">
            <div class="theme-footer-section theme-footer-">
              <a class="theme-footer-brand _mb-mob-30" href="#">
                <strong>Safiri</strong>
              </a>
              <div class="theme-footer-brand-text">
                <p>Safiri is a new kind of booking platform, designed to simplify the process and free up your time.</p>
                <p>Our light, intuitive interface will have you booked and at peace in no time.</p>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <div class="theme-footer-section theme-footer-">
                  <h5 class="theme-footer-section-title">Safiri</h5>
                  <ul class="theme-footer-section-list">
                    <li>
                      <a href="#">About Safiri</a>
                    </li>
                    <li>
                      <a href="#">Mobile App</a>
                    </li>
                    <li>
                      <a href="#">Customer Support</a>
                    </li>
                    <li>
                      <a href="#">Advertising</a>
                    </li>
                    <li>
                      <a href="#">Jobs</a>
                    </li>
                    <li>
                      <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                      <a href="#">Terms of Use</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="theme-footer-section theme-footer-">
                  <h5 class="theme-footer-section-title">Explore</h5>
                  <ul class="theme-footer-section-list">
                    <li>
                      <a href="#">Countries</a>
                    </li>
                    <li>
                      <a href="#">Regions</a>
                    </li>
                    <li>
                      <a href="#">Cities</a>
                    </li>
                    <li>
                      <a href="#">Districs</a>
                    </li>
                    <li>
                      <a href="#">Airports</a>
                    </li>
                    <li>
                      <a href="#">Hotels</a>
                    </li>
                    <li>
                      <a href="#">Places of Interest</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="theme-footer-section theme-footer-">
                  <h5 class="theme-footer-section-title">Book</h5>
                  <ul class="theme-footer-section-list">
                    <li>
                      <a href="#">Apartments</a>
                    </li>
                    <li>
                      <a href="#">Resorts</a>
                    </li>
                    <li>
                      <a href="#">Villas</a>
                    </li>
                    <li>
                      <a href="#">Hostels</a>
                    </li>
                    <li>
                      <a href="#">B&Bs</a>
                    </li>
                    <li>
                      <a href="#">Guesthouses</a>
                    </li>
                    <li>
                      <a href="#">Hotel Chains</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="theme-footer-section theme-footer-section-subscribe bg-grad _mt-mob-30">
              <div class="theme-footer-section-subscribe-bg" style="background-image:url(img/footer/footer_subscribe_bg.png);"></div>
              <div class="theme-footer-section-subscribe-content">
                <h5 class="theme-footer-section-title">Save up to 50% off your next trip</h5>
                <p class="text-muted">Subscribe to unlock our secret deals</p>
                <form>
                  <div class="form-group">
                    <input class="form-control theme-footer-subscribe-form-control" type="email" placeholder="Type your e-mail here"/>
                  </div>
                  <button class="btn btn-primary-invert btn-shadow text-upcase theme-footer-subscribe-btn" type="submit">Get deals</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="theme-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="theme-copyright-text">Copyright &copy; {{date('Y')}}
              <a href="#">BuuPass</a>. All rights reserved.
            </p>
          </div>
          <div class="col-md-6">
            <ul class="theme-copyright-social">
              <li>
                <a class="fa fa-facebook" href="#"></a>
              </li>
              <li>
                <a class="fa fa-google" href="#"></a>
              </li>
              <li>
                <a class="fa fa-twitter" href="#"></a>
              </li>
              <li>
                <a class="fa fa-youtube-play" href="#"></a>
              </li>
              <li>
                <a class="fa fa-instagram" href="#"></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    @endif
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/moment.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYeBBmgAkyAN_QKjAVOiP_kWZ_eQdadeI&callback=initMap&libraries=places"></script>
    <script src="{{asset('js/owl-carousel.js')}}"></script>
    <script src="{{asset('js/blur-area.js')}}"></script>
    <script src="{{asset('js/icheck.js')}}"></script>
    <script src="{{asset('js/gmap.js')}}"></script>
    <script src="{{asset('js/magnific-popup.js')}}"></script>
    <script src="{{asset('js/ion-range-slider.js')}}"></script>
    <script src="{{asset('js/sticky-kit.js')}}"></script>
    <script src="{{asset('js/smooth-scroll.js')}}"></script>
    <script src="{{asset('js/fotorama.js')}}"></script>
    <script src="{{asset('js/bs-datepicker.js')}}"></script>
    <script src="{{asset('js/typeahead.js')}}"></script>
    <script src="{{asset('js/quantity-selector.js')}}"></script>
    <script src="{{asset('js/countdown.js')}}"></script>
    <script src="{{asset('js/window-scroll-action.js')}}"></script>
    <script src="{{asset('js/fitvid.js')}}"></script>
    <script src="{{asset('js/youtube-bg.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
  </body>
</html>