<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return redirect('/book');
});

Route::resource('/book', BookController::class);


Route::get('users',function(){
    Schema::create('users',function($table){
        $table->string('useranme',32);
        $table->string('password',60);
    });
    return "table users telah dibuat";
});
