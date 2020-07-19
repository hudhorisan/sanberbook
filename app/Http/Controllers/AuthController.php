<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regis() {
        return view ('register');
    }

    public function regis_post(Request $request) {
        $lname= $request->input('lName');
        $fname= $request->input('fName');
        return view('congrat',['lname'=>$lname,'fname'=>$fname]);
    }
}
