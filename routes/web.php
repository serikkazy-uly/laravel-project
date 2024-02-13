<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/store', function(Request $request){
    $image=$request->file('image');
    // dd($image->isValid());
    // dd(storage_path());

    dd($image->store('uploads'));
    // dd(storage_path());
    // dd($request->all('image'));
    // var_dump(123);
});

Route::get('/show', function () {
    return view('show');
});

Route::get('edit', function () {
    return view('edit');
});
