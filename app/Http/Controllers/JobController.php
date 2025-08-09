<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);
        return view('jobs/index', [
            'jobs' => $jobs
        ]);
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }
    public function store()
    {
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
    }
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }
    public function update(Job $job)
    {
        // Validate the request data
        request()->validate([
            'title' => 'required|min:3|max:255',
            'salary' => 'required|numeric|min:0'
        ]);

        // Find the job by ID and update it
        // $job = Job::findOrFail($id);

        // $job->save();
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        return redirect('/jobs/' . $job->id);
    }
    public function delete(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
