<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('about', function(){
   return view('about');
})->name('about');


Route::get('food-safety', function(){
    return view('safety');
})->name('safety');

Route::get('enterprise-development', function(){
    return view('enterprise');
})->name('enterprise');

Route::get('inclusive-value-chains', function(){
    return view('inclusive');
})->name('inclusive');

Route::get('research-and-knowledge-disssemination', function(){
    return view('research');
})->name('research');


route::get('profile', function(){
    return view('profile');
})->name('profile');


