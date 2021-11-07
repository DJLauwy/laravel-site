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
        $data = $request->validate(
            [
                'name' => 'required|min:2|max:75',
                'email' => 'required|email',
                'subject' => 'required|string',
                'message' => 'required|min:5'
            ]
        );

        return redirect(route('home'));
    }
}
