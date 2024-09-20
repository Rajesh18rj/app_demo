<x-layout>

    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <h1>Welcome to Jobs Page </h1>


    <ul>
        @foreach ($jobs as $job)
            <a href = "/jobs/{{ $job['id'] }}" >
            <li> <strong> {{ $job['title'] }}:</strong> {{ $job['salary'] }} Per year</li>
        @endforeach
    </ul>

</x-layout>
