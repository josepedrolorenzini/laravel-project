<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EcommerceCard;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use App\Models\Cryptocurrencies;
use App\Models\Jobs;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// React routerss /// 
Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
}); // React routerss /// 


///php routers

route::prefix("/")->group(function(){

    Route::get('about', function () {
        return view('about');
    });

 Route::get('example', [EcommerceCard::class, 'show']);

 route::get("jobs", function () {
    $job = new Jobs();
    return view("jobs", ['jobs' => $job::all()]);
 });

 route::get("job/{id}", function ($id) {
    $job = new Jobs();
    $jobID = Jobs::find($id) ;
    return view("job", ['job' => $job::find($id)]);
 });

 Route::get('database',[EcommerceCard::class, 'all']);

 Route::get("products/{id}", function ($id) {
            return "your id is " . $id;
 });


 Route::get('loginForm',[FormController::class, 'displayForm']);
 Route::post('loginForm',[FormController::class, 'submitForm'])->name('loginForm');

Route::get('crypto', function(){
    $crypto = new Cryptocurrencies();
    
 return $crypto->getCryptocurrency();

});  
});


///php routers


// React routerss /// 
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// React routerss /// 
require __DIR__.'/auth.php';

Auth::routes();
// Auth::middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
