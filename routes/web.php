<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

//Index Route
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs/index', [
        'jobs' => $jobs
    ]);
});

// Create Job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show Job
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

// Store Job    
Route::post('/jobs', function () {
    request()->validate([
        'title' => 'required|min:3|max:255',
        'salary' => 'required|numeric|min:0'
    ]);
    Job::create([
        'title' => request('title'),
        'employer_id' => 1,
        'salary' => request('salary')
    ]);
    return redirect('/jobs');
});

// Edit Job
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

// Update Job
Route::patch('/jobs/{id}', function ($id) {
    // Validate the request data
    request()->validate([
        'title' => 'required|min:3|max:255',
        'salary' => 'required|numeric|min:0'
    ]);

    // Find the job by ID and update it
    $job = Job::findOrFail($id);

    $job->save();
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);
    return redirect('/jobs/' . $id);
});

// Delete Job
Route::delete('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id)->delete();
    return redirect('/jobs');
});

// Contact Page
Route::get('/contact', function () {
    return view('contact');
});
