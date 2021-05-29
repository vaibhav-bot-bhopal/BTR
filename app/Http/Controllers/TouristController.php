<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TouristController extends Controller
{
    public function location()
    {
        return view('tourist.location');
    }

    public function howToReach()
    {
        return view('tourist.how-to-reach');
    }

    public function bestTimeToVisit()
    {
        return view('tourist.best-time-to-visit');
    }

    public function weather()
    {
        return view('tourist.weather');
    }

    public function safariZones()
    {
        return view('tourist.safari-zones');
    }

    public function excursion()
    {
        return view('tourist.charges');
    }

    public function pointOfInterests()
    {
        return view('tourist.point');
    }

    public function stay()
    {
        return view('tourist.stay');
    }

    public function dos()
    {
        return view('tourist.do-donts');
    }
}
