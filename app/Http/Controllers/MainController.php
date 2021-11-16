<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\News;
use App\Models\Tender;

class MainController extends Controller
{
    public function index()
    {
        $newses = News::orderBy('id', 'desc')->take(3)->get();
        $docs = Document::orderBy('id', 'desc')->take(3)->get();
        $tenders = Tender::orderBy('id', 'desc')->take(3)->get();

        return view('main.home', compact('newses', 'tenders', 'docs'));
    }

    // Display Newses with pagination
    public function newses()
    {
        $newses = News::orderBy('id', 'desc')->paginate(3);
        return view('news.news', compact('newses'));
    }

    // Display Single News in Detail
    public function news_details($slug)
    {
        $newsDetail = News::where('slug', $slug)->first();

        if ($newsDetail) {
            return view('news.news-detail', compact('newsDetail'));
        } else {
            return view('errors.404');
        }
    }
}
