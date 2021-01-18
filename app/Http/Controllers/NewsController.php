<?php

namespace App\Http\Controllers;
use App\News;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function newsPage()
    {
    	$news = DB::table('news')->get();
    	return view('news', ['news' => $news]);
    }

    public function newsPost($id, Request $reguest)
    {
    	$newsi = News::find($id);
    	return view('post', ['newsi' => $newsi]);
    }
}

//News::orderBy('created_at', 'ASC')->get();
