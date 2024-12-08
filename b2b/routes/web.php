<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/fortestonly', function () {
//     return view('welcome');
// });
