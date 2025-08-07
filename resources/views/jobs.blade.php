<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <h1>Hello From About Page</h1>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="hover:underline px-3 py-2 text-2xl">
                <strong>{{ $job['title'] }}</strong> pays {{ $job['salary'] }} per year
            </a><br>
        @endforeach
    </ul>
</x-layout>
