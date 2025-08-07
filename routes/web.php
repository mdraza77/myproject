<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        "jobs" => [
            [
                "id" => 1,
                "title" => "SDE",
                "salary" => "50,000",
            ],
            [
                "id" => 2,
                "title" => "Laravel Developer",
                "salary" => "60,000",
            ],
            [
                "id" => 3,
                "title" => "Programmer",
                "salary" => "70,000",
            ],
        ],
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            "id" => 1,
            "title" => "SDE",
            "salary" => "50,000",
        ],
        [
            "id" => 2,
            "title" => "Laravel Developer",
            "salary" => "60,000",
        ],
        [
            "id" => 3,
            "title" => "Programmer",
            "salary" => "70,000",
        ],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    // dd($job); // $id ka use karna thik tha, lekin actual job ka data dekhna better hai

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
