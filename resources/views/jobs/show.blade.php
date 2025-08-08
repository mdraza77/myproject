<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h1>Hello From About Page</h1>
    <h2 class="text-2xl">Job Title: <span class="text-green-700">{{$job['title']}}</span>.</h2>
    <p class="text-2xl">Salary: <span class="text-green-700">{{$job['salary']}}</span> per year.</p>
</x-layout>
