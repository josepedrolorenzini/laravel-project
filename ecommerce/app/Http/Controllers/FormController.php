<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function displayForm(){
        $data  = session()->get('allData', []);
        $email = session()->get('email', '');
        var_dump($data);
        return view('loginForm')->with('email', $email);
    }

    public function submitForm(Request $request){
        $allData = $request->all();
       // dd($allData);
        $newCrud = new Crud();
       // $newCrud->login($allData->email , $allData->password);
        return redirect('loginForm')->with(  
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'allData' => $allData, // storing all data in session for future reference.
             
            ]);
    }




}
