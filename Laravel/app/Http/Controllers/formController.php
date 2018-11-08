<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function formValidator()
    {
        return view('register');
    }

    public function formvalidate()
    {
        $this->validate(request(), [

            'email' => 'required',
            'username' => 'required',
            'password' => 'required'

        ]);
    }
}
