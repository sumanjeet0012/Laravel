<?php

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

Route::get('/post', function () {
    return view('post');
});

route::view('/direct_view', 'direct_view');

Route::get('/post/firstpost', function () {
    return view('firstpost');
});

Route::get('/post/{id?}/{commentId?}', function (string $id = null) {
    return "this is post number $id";
})->whereNumber('id')->whereAlpha('commentId');