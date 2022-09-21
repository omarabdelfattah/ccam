<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\account; 
use App\Http\Controllers\home; 

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

Route::group(['prefix' => 'dashboard' , 'middleware'=> 'SetLocale'],function(){

    Route::group(['middleware' => ['guest']],function(){
        Route::get('/login' ,[account::class, 'index'])->name('login');
        Route::post('/login' ,[account::class, 'login'])->name('login_check');
    });

    Route::group(['middleware' => 'auth' ],function(){
        Route::get('/' ,[home::class, 'index'])->name('dashboard');
        Route::get('/logout' ,[account::class, 'logout'])->name('logout');

        Route::get('/change_language/{lang}' ,[home::class, 'change_language'])->where('lang', '[a-zA-Z]+')->name('settings.change_language');


        Route::group(['prefix' => 'account'],function(){
            Route::get('/edit',[account::class,'edit'])->name('account.edit');
            Route::patch('/',[account::class,'update'])->name('account.update');
        });

    });


});