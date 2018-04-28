<?php 


Route::get('/aizaz' , function(){
    return aizaz::getCreds();
});

Route::get('/aizazcont' , 'aizaztag\Facebook\Controllers\AizazController@index');