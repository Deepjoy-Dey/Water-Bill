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
    return view('welcome');
});
Route::get('/vieew', function () {
    return view('vieew');
});
Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/register', function () {
    return view('auth/register');
});
Route::get('/application', function () {
    return view('ApplicationForm');
});
Route::get('/Homepage', function () {
    return view('Kios_Operator');
}); 

Route::get('/terms', function () {
    return view('terms');
}); 
Route::get('/privacy', function () {
    return view('privacy');
}); 
Route::get('/refund', function () {
    return view('refund');
}); 
Route::get('/contact', function () {
    return view('contact');
}); 

Route::post('/Homepage','ApplicationFormController@store');

Route::get('/search','SearchController@store');

Route::get('/List', 'SubOfficerController@show'); 

Route::post('/store/{id}','ApplicationFormController@pay');
Route::post('/payment/{id}','ApplicationFormController@payment');
Route::get('/receipt/{id}','ApplicationFormController@pdf');
Route::get('/MIS','ApplicationFormController@show1');


Route::get('/submit','TestController@index');
Route::post('/submit','TestController@store');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

