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
    	//dd($request->get("name"));
    	$data = $request->validate(
    		[
    			'name' => 'required|min:2|max:75',
                // 'email' => 'email:rfc,dns',
                'subject' => 'required|string',
                'message' => 'required|min:20'
    		]
    	);
        
        dd($data);
    }
}
