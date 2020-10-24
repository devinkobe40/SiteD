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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/guide', 'App\Http\Controllers\RouteController@game_guide')->name('game_guide');
Route::get('/community', 'App\Http\Controllers\RouteController@community')->name('community');
Route::get('/community/news', 'App\Http\Controllers\RouteController@community_news_index')->name('news_index');
Route::get('/community/forum', 'App\Http\Controllers\RouteController@community_forum_index')->name('forum_index');
Route::get('/community/forum/create_thread', 'App\Http\Controllers\ThreadController@show')->name('create_thread');
Route::post('/community/forum/submit_thread', 'App\Http\Controllers\ThreadController@store')->name('submit_thread');
Route::get('/community/forum/{thread}/edit_thread', 'App\Http\Controllers\ThreadController@edit')->name('edit_thread');
Route::post('/community/forum/{thread}/update_thread', 'App\Http\Controllers\ThreadController@update')->name('update_thread');

// Route::post('/community/forum/{thread}/edit_comment', 'App\Http\Controllers\CommentController@update')->name('edit_comment');

Route::get('/community/forum/{thread}', 'App\Http\Controllers\RouteController@view_thread')->name('view_thread');
// Route::get('/community/forum/user/{id}', 'App\Http\Controllers\RouteController@view_thread');

Route::get('/index', 'App\Http\Controllers\RouteController@go')->name('index');
