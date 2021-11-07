<?php

namespace App\Http\Controllers;

use App\Discography;

class DiscographyController extends Controller
{
    public function discographyMusic()
    {
        return view('discography', ['discography' => Discography::paginate(10)]);

    }
}
