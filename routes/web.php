<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// This points towards towards resources/views/index
// -> points towards { route('home') } in layouts.app.blade.php
/* 1st parameter: name of file, 
2nd parameter: method shows home controller, 
 ie data being passed in */
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
->name(name: 'home');
Route::view('/about', view: 'about')->name(name: 'about');
Route::view('/contact', view: 'contact')->name(name: 'contact');

// post is object that is originally from postController
Route::get('posts/{post}', 
[\App\Http\Controllers\PostController::class, 'show'])->name(name: 'posts.show');



// This is the same as Route::view
Route::get('/somepage', function () {
    return view('somepage');
});

