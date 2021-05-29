<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function adminBody()
    {
        return view('management.body');
    }

    public function goals()
    {
        return view('management.goals');
    }

    public function objectives()
    {
        return view('management.objectives');
    }

    public function training()
    {
        return view('management.training');
    }

    public function contact()
    {
        return view('management.contact');
    }
}
