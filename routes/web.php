<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('chat','Chatcontroller@index');
Route::post('send','Chatcontroller@send');
Route::post('saveToSession','Chatcontroller@saveTo');
Route::post('deleteSession','Chatcontroller@deleteSession');
Route::post('getOldMessage','Chatcontroller@getOldMessage');
Route::get('check',function(){
	return session('chat');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
