<?php

namespace App\Http\Controllers;

use App\Flight;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class FlightController extends Controller
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

        $flight = new Flight();
        $columns =  $flight->getFillable();
        $this->columns = $columns;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $db = DB::table('flights');

        if (empty($request->query())) {
            $flights = Flight::all();
        } else {
            foreach ($request->query() as $key => $val) {
                switch ($key) {
                    case 'seats':
                    case 'return':
                        continue;
                    case 'dest':
                        $citn = explode(',', $request->query($key));
                        $db->where('to', 'like', '%'.$citn[0].'%');
                        break;
                    case 'from':
                        $citn = explode(',', $request->query($key));
                        $db->where($key, 'like', '%'.$citn[0].'%');
                        break;
                    
                    default:
                        $db->where($key, $val);
                        break;
                }
            }

            $flights = $db->get();
        }
        $flights = Flight::all();

        return view('flights', ['flights' => $flights]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create-flight', ['fields' => $this->columns]);
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

        if(Flight::create($data)){
            Session::flash('success', 'Successfully created user!');
        } else {
            Session::flash('error', 'Failed to create user!');
        }

        return Redirect::to('flights');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $flight)
    {
        $data = $request->all();
        $flight = Flight::findOrFail($flight);

        if($flight->update($data)){
            Session::flash('success', 'Successfully updated flight!');
        } else {
            Session::flash('error', 'Failed to update flight!');
        }

        return Redirect::to('flights');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $flight)
    {
        $data = $request->all();
        $flight = Flight::findOrFail($flight);

        if($flight->delete($data)){
            Session::flash('success', 'Successfully deleted flight!');
        } else {
            Session::flash('error', 'Failed to delete flight!');
        }

        return Redirect::to('flights');
    }
}
