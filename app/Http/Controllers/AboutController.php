<?php

namespace App\Http\Controllers;

use App\Models\Tracker;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function introduction()
    {
        return view('about.introduction');
    }

    public function history()
    {
        return view('about.history');
    }

    public function conservationHistory()
    {
        return view('about.conservation-history');
    }

    public function reserveProfile()
    {
        return view('about.reserve-profile');
    }

    public function forestType()
    {
        return view('about.forest-type');
    }

    public function topography()
    {
        return view('about.topography');
    }

    public function significance()
    {
        return view('about.significance');
    }
}
