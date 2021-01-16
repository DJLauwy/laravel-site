<?php

namespace App\Http\Controllers;

use App\Discography;
use Illuminate\Http\Request;

class DiscographyController extends Controller
{
    public function discographyMusic()
    {
        //$discography = Discography::all();
        $discography = Discography::paginate(10);
    	return view('discography', ['discography' => $discography]);

    }

    //public function index(){
    	

    	//vind met een bepaaalde id:
    	//$discography = Discography::find(1);

    //}
}
