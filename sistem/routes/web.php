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
    return view('frontend.index');
});
Route::get('/kontak', function () {
    return view('frontend.contact');
});
Route::get('/icons', function () {
    return view('frontend.icons');
});
Route::get('/pria', function () {
    return view('frontend.mens');
});
Route::get('/wanita', function () {
    return view('frontend.women');
});
Route::get('/single', function () {
    return view('frontend.single');
});
Route::get('/typography', function () {
    return view('frontend.typography');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produk', 'ProdukController@index')->name('produk');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
