<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactMe()
    {
    	return view('contact');
    }

    public function handleForm(Request $request)
    {
    	dd($request->get("name"));
    	$data = $request->validate(
    		[
    			'name' => 'required|min:8'
    		]
    	);
    }
}
