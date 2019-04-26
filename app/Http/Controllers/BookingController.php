<?php

namespace App\Http\Controllers;

use App\Flight;
use App\Booking;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class BookingController extends Controller
{
    public $columns;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');

        $booking = new Booking();
        $columns =  $booking->getFillable();
        $this->columns = $columns;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $db = DB::table('bookings');

        if (empty($request->query())) {
            $bookings = Booking::all();
        } else {
            foreach ($request->query() as $key => $val) {
                switch ($key) {
                    case 'dest':
                        $citn = explode(',', $request->query($key));
                        $db->where('to', 'like', '%'.$citn[0].'%');
                        break;
                    
                    default:
                        $db->where($key, $val);
                        break;
                }
            }

            $bookings = $db->get();
        }
        $bookings = Booking::all();

        return view('bookings', ['bookings' => $bookings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $flight = Flight::find($request->query('flight', 1));
        $flight->return = empty($request->query('return', '')) ? '' : Flight::find($request->query('return')); 
        return view('booking')->with('flight', $flight);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if(empty($data['user_id']) || !isset($data['user_id'])){ 
            $user = User::create($data); 
            $data['user_id'] = $user->id; 
        }

        if(Booking::create($data)){
            Session::flash('success', 'Successfully created booking!');
            return Redirect::to('success');
        } else {
            Session::flash('error', 'Failed to create booking!');
            return Redirect::to('fail');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $booking)
    {
        $data = $request->all();
        $booking = Booking::findOrFail($booking);

        if($booking->update($data)){
            Session::flash('success', 'Successfully updated booking!');
        } else {
            Session::flash('error', 'Failed to update booking!');
        }

        return Redirect::to('bookings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $booking)
    {
        $data = $request->all();
        $booking = Booking::findOrFail($booking);

        if($booking->delete($data)){
            Session::flash('success', 'Successfully deleted booking!');
        } else {
            Session::flash('error', 'Failed to delete booking!');
        }

        return Redirect::to('bookings');
    }
}
