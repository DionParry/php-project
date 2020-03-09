<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Booking;

class Bookings extends Controller
{
    //fetch  db contents
    function showDB() {
      // return Booking::all();

       $data = DB::table('properties')
      ->select('properties.property_name', 'properties.near_beach',
      'properties.accepts_pets', 'properties.sleeps','properties.beds',
      'locations.location_name', 'bookings.start_date', 'bookings.end_date')
      ->join('bookings','bookings._fk_property','properties.__pk')
      ->join('locations', 'properties._fk_location', 'locations.__pk')
      ->get();

      // return view('propertyview',['data'=>$data]);
      return view('propertyview', compact('data'));
    }

    //pass data entry values into custome query
    function filter(Request $request) {

          //allow users to search for following:
          //feature -  near_beach, accepts_pets, sleeps, beds
          //date - start_date, end_date
          //location - location_name

          //capitalise as data is capitalised in database
          $location = ucfirst($request->input('location'));
          //handle tickbox
          $beach = $request->input('beach');
          if (empty($beach)) {
            $beach=0;
          }
          $pets = $request->input('pets');
          if (empty($pets)) {
            $pets=0;
          }
          $sleeps = $request->input('sleeps');
          $startDate = $request->input('startDate');
          $endDate = $request->input('endDate');
          $beds = $request->input('beds');


          $data = DB::table('properties')
          ->select('properties.property_name', 'properties.near_beach',
          'properties.accepts_pets', 'properties.sleeps','properties.beds',
          'locations.location_name', 'bookings.start_date', 'bookings.end_date')
          ->join('bookings','bookings._fk_property','properties.__pk')
          ->join('locations', 'properties._fk_location', 'locations.__pk')
          ->where('location_name', $location)
          ->where('sleeps', $sleeps)
          ->where('near_beach',$beach)
          ->where('accepts_pets',$pets)
          ->where('beds',$beds)
          ->whereBetween('start_date', array($startDate, $endDate))
          ->get();
          if (empty($data)) {
            return $data = "No results found"; //returns empty results
          } else {
            return view('propertyview', compact('data'));
          }
    }
}

//https://laravel.com/docs/5.8/queries
//SELECT properties.property_name, properties.near_beach, properties.accepts_pets, properties.sleeps, properties.beds, locations.location_name, bookings.start_date, bookings.end_date
// FROM bookings inner join properties ON bookings._fk_property = properties.__pk inner join locations ON properties._fk_location = locations.__pk
