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

Route::get('/', 'IndexController@Show');

Route::get('/index', 'IndexController@Show');

Route::get('/home','IndexController@Show');

Route::get('/blog', function () {
    return view('Pages.blog');
});

Route::get('/about', function () {
    return view('Pages.about');
});

Route::get('/show', function () {
    return view('Pages.show');
})->middleware('auth');

Route::get('/unlogin', function () {
    return view('errors.unlogin');
});

Route::post('/CoRInfo', 'CopyRightInfoMailController@SendEmail')->name('CoRInfo');

Route::post('/CalcCoR', 'CalcCopyrightController@calc')->name('CalcCoR');

Route::get('/information','authPersonalInformationController@show' )->name('infoShow')->middleware('auth');

Route::post('/information', 'authPersonalInformationController@save')->name('infoUpdate');

Route::post('/information/PasswordReset', 'authPersonalInformationController@reset')->name('PwReset');

Auth::routes();

Route::get('/{others}', function () {
    return view('errors.404');
});