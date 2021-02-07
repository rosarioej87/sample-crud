<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
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
    return view('welcome');
});

Route::get('/email', function () {
    Mail::to('email@email.com')->send(new WelcomeMail);
    return new WelcomeMail();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'TestController@about');

Route::resource('service', 'ServiceController');
Route::resource('customers', 'CustomerController');
