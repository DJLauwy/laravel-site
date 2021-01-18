<?php

namespace App\Http\Controllers;
use App\News;
use App\Discography;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
	public function adminSection(){
		return view('admin');
	}

    public function adminNews()
    {
    	$news = DB::table('news')->get();
    	return view('adminnews', ['news' => $news]);
    }

    public function adminMusic()
    {
    	$discography = DB::table('discographies')->get();
    	return view('adminmusic', ['discographies' => $discography]);
    }
}
