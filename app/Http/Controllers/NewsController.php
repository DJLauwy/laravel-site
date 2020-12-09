<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsPage()
    {
    	return view('news');
    }

    public function newsPost($id)
    {
    	return view('news', ['id' => $id]);
    }
}
