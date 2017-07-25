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


Route::post('order', function() {
    Validator::make(request()->all(), [
        'email' => 'required|email|unique:' . str_plural(request('product')),
        'product' => 'required|in:sticker,tattoo',
    ])->validate();

    $productClass = 'App\\' . ucwords(request('product'));

    $productClass::create(['email' => request('email')]);
});
