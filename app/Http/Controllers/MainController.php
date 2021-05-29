<?php

namespace App\Http\Controllers;

use App\Models\newsEnglish;
use App\Models\newsHindi;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $dataen = newsEnglish::orderBy('id', 'desc')->take(3)->get();
        $datahi = newsHindi::orderBy('id', 'desc')->take(3)->get();

        return view('main.home', compact('dataen', 'datahi'));
    }

    public function gallery()
    {
        $dir = public_path()."/assets/images/btr_actual_image";
        $images = scandir($dir);
        $images = array_slice($images, 2 , 24);

        return view('main.gallery', compact('images'));
    }

    public function gallery2()
    {
        $dir = public_path()."/assets/images/btr_actual_image";
        $images = scandir($dir);
        $images = array_slice($images, 26 , 24);

        return view('main.gallery', compact('images'));
    }

    public function gallery3()
    {
        $dir = public_path()."/assets/images/btr_actual_image";
        $images = scandir($dir);
        $images = array_slice($images, 50 , 24);

        return view('main.gallery', compact('images'));
    }
}
