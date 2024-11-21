<x-layout>
    <x-page-heading>Results</x-page-heading>
    <section>
        <div class="space-y-6">
            @foreach ($jobs as $job)
                <x-job-card-wide :$job></x-job-card-wide>
            @endforeach
        </div>
    </section>
</x-layout>