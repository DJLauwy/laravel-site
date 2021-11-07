<?php

namespace App\Http\Controllers;

use App\Discography;
use App\News;

class AdminController extends Controller
{
    public function adminSection()
    {
        return view('admin');
    }

    public function adminNews()
    {
        return view('adminnews', ['news' => News::paginate()]);
    }

    public function adminMusic()
    {
        return view('adminmusic', ['discography' => Discography::paginate(10)]);
    }
}
