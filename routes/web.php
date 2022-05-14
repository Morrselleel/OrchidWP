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
/*
Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', function () {
    return view('OWPfront.home');
});


Route::get('/gallery', function () {
    return view('OWPfront.gallery');
});


Route::get('/wedding-packages', function () {
    return view('OWPfront.wedding-packages');
});


Route::get('/events-packages', function () {
    return view('OWPfront.events-packages');
});


Route::get('/contact-us', function () {
    return view('OWPfront.contactus');
});

Route::get('/about-us', function () {
    return view('OWPfront.aboutus');
});