<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RakibDevs\Weather\Weather;



class WeatherController extends Controller
{
    public function city(Request $request){
        $wt = new Weather();
        $city = $request['city'];

        $info = $wt->getCurrentByCity($city);
        // dd($info);
        return view('city',compact('info'));

     }

}
