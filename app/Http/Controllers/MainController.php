<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\newsEnglish;
use App\Models\newsHindi;
use App\Models\Tender;
use App\Models\Tracker;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $dataen = newsEnglish::orderBy('id', 'desc')->take(3)->get();
        $datahi = newsHindi::orderBy('id', 'desc')->take(3)->get();
        $docs = Document::orderBy('id', 'desc')->take(3)->get();
        $tenders = Tender::orderBy('id', 'desc')->take(3)->get();

        return view('main.home', compact('dataen', 'datahi', 'tenders', 'docs'));
    }
}
