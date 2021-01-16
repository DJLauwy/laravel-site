<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function newsPage()
    {
    	$news = DB::table('news')->get();
    	return view('news', ['news' => $news]);
    }

    //public function newsPost($id)
    //{
    //	return view('news', ['id' => $id]);
    //}
}
