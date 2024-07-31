<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EcommerceCard extends Controller
{
    //
    public function show(){
     $jobs = new Jobs()  ;
     $jssonJobs = json_encode($jobs) ; 
    //  echo $jssonJobs ;
    $allJobs = $jobs::all();
    dd($jobs::all());
    // $jobs::all()[0]->title
    // $jobs::all()[0]->salary
    return view('Ecommerce');
    } // show()





    public function all(){
      $products =   DB::table('products_test')->get() ;
      return view("db" , [
        "products" => $products
      ]) ;

    }// all();


}
