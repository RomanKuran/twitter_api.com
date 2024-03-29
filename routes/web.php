<?php
use Illuminate\Support\MessageBag;
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

Route::get('add', 'TwitterController@add');
Route::get('feed', 'TwitterController@feed');
Route::get('remove', 'TwitterController@remove');