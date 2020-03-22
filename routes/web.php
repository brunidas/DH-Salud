<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function(){
    return view('index');
});


Route::get('login', function(){
    return view('login');
});

Route::get('signup1', function(){
    return view('signup1');
});


Route::get('signup2', function(){
    return view('signup2');
});

Route::get('home', function(){
    return view('home');
});

Route::get('faq', function(){
    return view('faq');
});

Route::get('contact', function(){
    return view('contact');
});


Route::get('profile', function(){
    return view('profile');
});



Route::get('turn',function(){
    return view('turn');
});