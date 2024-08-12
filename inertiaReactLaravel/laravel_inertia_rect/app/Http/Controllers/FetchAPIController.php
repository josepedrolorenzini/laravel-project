<?php

namespace App\Http\Controllers;

use App\Models\FetchAPI;
use Illuminate\Http\Request;

class FetchAPIController extends Controller
{
    //
     
    public function displayCrypto(){

        $fetchApi = new FetchAPI();
       // return "hello crypto" ;
        return $fetchApi->sayHello();

    }
}
