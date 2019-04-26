<?php

namespace App\Http\Controllers;

use App\Airline;
use App\User;
use App\Booking;
use App\City;
use App\Country;
use App\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function __invoke($path = '' ){
    	$data = array(
    		'history' => Booking::where('user_id', Auth::user()->id),
    		'cards' => Booking::where('user_id', Auth::user()->id),
    		'travelers' => Booking::where('user_id', Auth::user()->id),
    		'bookmarks' => Booking::where('user_id', Auth::user()->id),
    		'notifications' => Booking::where('user_id', Auth::user()->id),
    	);
    	return view('account.'.$path, array($path => $data[$path]));
    }
}
