<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function show($page)
    {
        return view('react', [
            'page' => [
                'component' => $page
            ]
        ]);
    }

    public function show2(){
        return ["view('react2')" => "https://inertiajs.com/who-is-it-for"];
    }
}
