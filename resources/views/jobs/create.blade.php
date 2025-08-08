<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <div class="py-8">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Post a New Job</h1>
        <form action="/jobs" method="POST" class="bg-white p-6 rounded-lg shadow-sm">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Job Title</label>
                <input type="text" id="title" name="title" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
                <input type="number" id="salary" name="salary" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
            <button type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Create Job</button>
        </form>
</x-layout>
