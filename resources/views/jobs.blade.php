<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>
    
    <h1>Hey there!</h1>
    <p>This is where you can learn about our Jobs!</p>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}</strong> :  Pays {{ $job['salary'] }} per year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>