<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
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
    $images = DB::table('images')->get(); // get collections from db
    // ->select('*')
    // ->get();
    // $myImages = $images->pluck('image')->all();
    return view('welcome', ['imagesInView' => $images]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/store', function (Request $request) {
    $image = $request->file('image');
    $filename = $request->image->store('uploads');
    DB::table('images')->insert(
        ['image' => $filename]
    );
    return redirect('/');
});

Route::get('/show/{id}', function ($id) {
    $image = DB::table('images')->select('*')->where('id', $id)->first();
    return view('show', ['imageInView' => $image->image]);
});

Route::get('/edit/{id}', function ($id) {
    $image = DB::table('images')->select('*')->where('id', $id)->first();
    return view('edit', ['imageInView' => $image]);
});

Route::post('/update/{id}', function (Request $request, $id) {
    $image = DB::table('images')->select('*')->where('id', $id)->first();

    Storage::delete($image->image);

    $filename = $request->image->store('uploads');

    DB::table('images')
        ->where('id', $id)
        ->update(['image' => $filename]);
    return redirect('/');
});

Route::get('/delete/{id}', function ($id) {
    $image = DB::table('images')->select('*')
        ->where('id', $id)
        ->first();
    Storage::delete($image->image);

    DB::table('images')
        ->where('id', $id)
        ->delete();
    return redirect('/');
});
