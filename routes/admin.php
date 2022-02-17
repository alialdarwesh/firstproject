<?php

use Illuminate\Support\Facades\Route;



Route::get('/admin', function () {
    return 'Hello Admin';
});

Route::namespace('Front')->group(function (){

    Route::get('user' , 'UserController@showAdminName');

});

