<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsPage()
    {
        return view('news', ['news' => News::paginate()]);
    }

    public function newsPost($id, Request $reguest)
    {
        return view('post', ['newsi' => News::findOrFail($id)]);
    }
}
