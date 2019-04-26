<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('book', 'BookingController@create');

Route::resources([
    'payments'          => 'PaymentController',
    'users'             => 'UserController',
    'flights'           => 'FlightController',
    'bookings'           => 'BookingController'
]);

Route::prefix('account')->group(function () {
	Route::get('/', function () {
        return view('account.account');
    });
	Route::get('/{view}', 'AccountController');
});

Route::get('success', function () {
    return view('success');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
