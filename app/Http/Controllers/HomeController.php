<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function homePage()
    {
    	$news = DB::table('news')->get();
    	return view('home', ['news' => $news]);
    }
}
