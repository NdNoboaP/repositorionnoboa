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
    return view('welcome');
});

Auth::routes(['register'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('validador/{num}',function($num){
    return $num;
})->where(['num'=>'[A-Z][0-9]+']);

//Route::get('validador2/{num}',function($num){
//    return $num;
// })->where(['num'=>'[A-Z][0-9]+']);

 
Route::group(['prefix'=>'admin'],function(){
    

    Route::get('/saludar-p/{name}',function($name){
        return "Hola: " .$name;
    
 }) ;
});