<x-layout>

    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <h1>Welcome to Jobs Page </h1>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job->id }}" class="block p-6 bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="font-bold text-blue-600 mb-2">{{ $job->employer->name}}</div>
                <div class="text-gray-700 mb-1">
                    <strong class="text-lg">{{ $job->title }}</strong>
                </div>
                <div class="text-gray-600">
                    <span class="text-green-600 font-semibold">Pays {{ $job->salary }} Per Year</span>
                </div>
            </a>
        @endforeach
        <div> {{ $jobs->links() }}</div>
    </div>






</x-layout>
