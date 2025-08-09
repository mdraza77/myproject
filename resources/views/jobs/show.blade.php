<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h1>Hello From About Page</h1>
    <h2 class="text-2xl">Job Title: <span class="text-green-700">{{$job->title}}</span>.</h2>
    <p class="text-2xl">Salary: <span class="text-green-700">{{$job->salary}}</span> per year.</p>
    <p class="mt-6">
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>
</x-layout>
