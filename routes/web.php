<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(UserController::class)->group(function(){
    Route::get('/','ShowUser')->name('home');

    Route::get('/user/{id}','singleUser')->name('view.user');

    // Route::get('/add', [UserController::class,'addUser'])->name('addUser');

    Route::post('/add','addUser')->name('addUser');

    Route::post('/update/{id}','UpdateUser')->name('update.user');

    Route::get('/updatepage/{id}', 'UpdatePage')->name('update.page');

    Route::get('/delete/{id}','deleteData')->name('delete.user');
});



Route::view('newuser', '/addUser');
