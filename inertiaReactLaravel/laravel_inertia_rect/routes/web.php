<?php

use App\Http\Controllers\FetchAPIController;
use App\Models\FetchAPI;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia::render('Home' ,[
        'positive' => true,
        'name' => 'props'
    ]);
});



Route::get('/test', function () {
   
    return Inertia::render('Test', [
        'message' => 'Hello, World!'
    ]);
    
} );

Route::inertia('/api' , 'Apicrypto');
// Route::inertia('/solana' , 'FetchSolana');


Route::get("/crypto", function () {
   // return 'hello world !';
    return Inertia::render('Crypto');
});


// Route::get("/fetchapi",[FetchAPI::class , 'sayHello' ]);
Route::get('/fetchapi', [FetchAPIController::class,'displayCrypto']);


Route::get("/about", function () {
    return Inertia::render('About/About');
});