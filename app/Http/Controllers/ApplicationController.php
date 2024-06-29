<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class ApplicationController
{
    public function index()
    {
        $newsResult = News::all();
        return view('frontend.pages.main', compact('newsResult'));
    }

    public function newsdetails($id)
    {
        $newsDetails = News::where('id', $id)->first();
        return view('frontend.pages.news-details', compact('newsDetails'));
    }
}