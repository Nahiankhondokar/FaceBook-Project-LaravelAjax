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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');


Route::group(['namespace' => 'App\Http\Controllers'], function(){

    // ============== Profile =============

    Route::get('/profile_about', 'UserController@profileAbout') -> name('profile.about');
    Route::get('/profile_about_edit', 'UserController@profileAboutEdit') -> name('profile.about.edit');
    Route::post('/profile_about_update', 'UserController@profileAboutUpdate') -> name('profile.about.update');
    Route::get('/user_all_about_data', 'UserController@allUserAboutData') -> name('userAllData');



    // ============== Post =============

    Route::post('/user_post_store', 'PostController@userPostStore') -> name('userPost');
    Route::get('/user_post_show', 'PostController@userPostShow') -> name('userPostShow');





    // ============== Photos =============

    Route::get('/user_photo_edit', 'UserController@userPhotoEdit') -> name('userPhoto');
    Route::post('/user_photo_update', 'UserController@userPhotoUpdate') -> name('userPhotoUpdate');



});

