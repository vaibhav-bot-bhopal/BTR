<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Tender;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Display Info For English Language
        $user = Auth::user();
        $news_count = News::all()->count();
        $tender_count = Tender::all()->count();
        $docs_count = Document::all()->count();
        $gallery_count = Gallery::all()->count();
        return view('admin.dashboard.dashboard', compact('news_count', 'tender_count', 'docs_count', 'gallery_count'));
    }
}
