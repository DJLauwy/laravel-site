<?php

namespace App\Http\Controllers;

use App\News;

class HomeController extends Controller
{
    public function homePage()
    {
        return view('home', ['news' => News::paginate()]);
    }
}
