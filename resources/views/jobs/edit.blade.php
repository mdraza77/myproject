<x-layout>
    <x-slot:heading>
        Edit Job {{ $job->title }}
    </x-slot:heading>
    <div class="py-8">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Edit The Job</h1>
        <form action="/jobs/{{ $job->id }}" method="POST" class="bg-white p-6 rounded-lg shadow-sm">
            @csrf
            @method('Patch')
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Job Title</label>
                <input type="text" id="title" name="title" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    value="{{ $job->title }}">
                @error('title')
                    <p class="text-red-600 text-xs font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
                <input type="number" id="salary" name="salary" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    value="{{ $job->salary }}">
                @error('salary')
                    <p class="text-red-600 text-xs font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>
            {{-- @if ($errors->any())
                <div class="mb-4">
                    <ul class="text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <div class="mt-6 flex items-center justify-between gap-x-6">
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Update Job
                </button>
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition"
                    form="delete-form">Deleete Job
                </button>
            </div>
        </form>
        <form id="delete-form" class="hidden" action="/jobs/{{ $job->id }}" method="POST">
            @csrf
            @method('delete')
        </form>
</x-layout>
