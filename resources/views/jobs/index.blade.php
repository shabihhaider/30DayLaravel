<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-5">
        @foreach ($jobs as $job)
           <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="text-blue-500 text-sm font-bold">{{ $job->employer['name'] }}</div>
                <div>
                    <strong class="text-laracasts">{{ $job['title'] }}</strong>: Pays {{ $job['salary']}} per year.
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>