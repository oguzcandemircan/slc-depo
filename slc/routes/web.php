<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});


//Route::get('/kok','HomeController@Index', function () {

//});

//Route::resourse('/users','UserController');



//***** Giriş Yapanların Eriştiği Kısım ****///
Route::group(['middleware' => ['auth']], function () {

     // bu kısma her eklediğin  routelandırma auth korumasında oluçaktır.login olmayan bu kısma ulaşamıyacak.

    Route::get('admin' ,'LoginController@admin', function()
        {


        });


});



Route::get('kayit','LoginController@kullaniciEkle',function(){


})->name('kayit');



Route::get('kayit-ol',function(){
 return view('kullanici_ekle');
});

Route::get('cikis','LoginController@cikis',function(){


})->name('cikis');


Route::get('login','LoginController@authenticate',function()
{

})->name('login');

Route::get('giris','LoginController@giris',function(){


})->name('giris');



Route::get('yazi_al','LoginController@yazi_al',function()
{
 
})->name('yazi_al');

Route::get('yazi_gonder','LoginController@yazi_gonder',function(){

})->name('yazi_gonder');