<x-layout>

    <section class="text-center">
        <h1 class="font-bold text-4xl my-5">Let's Find Your Great Job</h1>
        <x-forms.form action="/search" method="get" >
            <x-forms.input :label="false" name="q" type="text" placeholder="Let's find your great job..."/>
        </x-forms.form>


    </section>

    <section>
        <x-section-heading>Featured Jobs</x-section-heading>

        <div class="grid lg:grid-cols-3 gap-8">
            @foreach ($featured_jobs as $job)
                <x-job-card :$job></x-job-card>
            @endforeach
        </div>
   
    </section>

    <section>
        <x-section-heading>Tags</x-section-heading>
        <div class="flex flex-wrap gap-1">
           @foreach ($tags as $tag)
               <x-tag :$tag />
           @endforeach
        </div>
       
    </section>
    
    <section>
        <x-section-heading>Recent Jobs</x-section-heading>
        <div class="space-y-6">
            @foreach ($jobs as $job)
                <x-job-card-wide :$job></x-job-card-wide>
            @endforeach
        </div>
    </section>
   
</x-layout>