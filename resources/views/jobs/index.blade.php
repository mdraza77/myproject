<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <div class="py-8">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Available Jobs</h1>
        <div class="grid gap-6 md:grid-cols-2">
            @foreach ($jobs as $job)
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6 hover:shadow-lg transition">
                    <div class="flex items-center mb-2">
                        <span class="text-lg font-semibold text-gray-700">{{ $job->employer->name }}</span>
                    </div>
                    <a href="/jobs/{{ $job['id'] }}"
                        class="block text-xl font-bold text-blue-600 hover:underline mb-2">
                        {{ $job['title'] }}
                    </a>
                    <div class="text-gray-500 mb-2">Salary: <span
                            class="font-medium text-gray-700">{{ $job['salary'] }}</span> per year</div>
                </div>
            @endforeach
        </div>
        <div class="mt-8 flex justify-center">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
