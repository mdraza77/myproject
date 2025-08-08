<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs/index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});
Route::post('/jobs', function () {
    Job::create([
        'title' => request('title'),
        'employer_id' => 1,
        'salary' => request('salary')
    ]);
    return redirect('/jobs');
});
Route::get('/contact', function () {
    return view('contact');
});
