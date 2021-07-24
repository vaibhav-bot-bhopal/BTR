<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\newsEnglish;
use App\Models\newsHindi;
use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Display Info For English Language
        if (session('locale') == 'en') {
            $user = Auth::user();
            $news_count = newsEnglish::all()->count();
            $tender_count = Tender::all()->count();
            $gallery_count = Gallery::all()->count();
            return view('admin.dashboard.dashboard', compact('news_count', 'tender_count', 'gallery_count'));
        }

        // Display Info For Hindi Language
        if (session('locale') == 'hi') {
            $user = Auth::user();
            $news_count = newsHindi::all()->count();
            $tender_count = Tender::all()->count();
            $gallery_count = Gallery::all()->count();
            return view('admin.dashboard.dashboard', compact('news_count', 'tender_count', 'gallery_count'));
        }
    }
}
