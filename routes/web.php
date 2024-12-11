<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

route::get('/home',[HomeController::class,'index']);

route::get('/add_menu',[AdminController::class,'add_menu']);

route::post('/upload_menu',[AdminController::class,'upload_menu']);

route::get('/view_menu',[AdminController::class,'view_menu']);

route::get('/delete_menu/{id}',[AdminController::class,'delete_menu']);

route::get('/update_menu/{id}',[AdminController::class,'update_menu']);

route::post('/edit_menu/{id}',[AdminController::class,'edit_menu']);


// Route::get('/home', function () {
//     return view('home', ['title' => 'Home'], ['name' => 'Home']);
// });

// Route::get('/kuliner', function () {
//     return view('kuliner', ['title' => 'Kuliner'], ['name' => 'Kuliner']);
// });

// Route::get('/about', function () {
//     return view('about', ['title' => 'About'], ['name' => 'About']);
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
