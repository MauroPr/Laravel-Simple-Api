<?php

use Illuminate\Support\Facades\Route;
use App\Controller\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', PostController::class, 'Index');