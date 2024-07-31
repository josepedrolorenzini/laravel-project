<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //


    public function displayForm(){
       
        return view('loginForm');
    }




}
