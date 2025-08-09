<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;
use App\Http\Controllers\JobController;

Route::view('/', 'home');

// Route::controller(Jobcontroller::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'delete');
// });

Route::resource('/jobs', JobController::class, [
    // 'except' => ['edit'],
    // 'only' => ['index', 'create', 'show', 'store',],
]);

Route::view('/contact', 'contact');
