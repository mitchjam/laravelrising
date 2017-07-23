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

Route::get('/', function () {
    return view('home');
});


Route::post('sticker', function() {
    Validator::make(request()->all(), [
        'email' => 'required|email',
    ])->validate();

    App\Sticker::create(['email' => request('email')]);
});

Route::post('tattoo', function() {
    Validator::make(request()->all(), [
        'email' => 'required|email',
    ])->validate();

    App\Tattoo::create(['email' => request('email')]);
});
