<?php

namespace App\Http\Controllers;
use App\News;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminCMS()
    {
    	$news = DB::table('news')->get();
    	return view('admin', ['news' => $news]);
    }
}
