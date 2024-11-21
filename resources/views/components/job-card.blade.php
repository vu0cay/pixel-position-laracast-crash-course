@props(['job'])

<x-panels class="flex flex-col text-center">
    
    <h3 class="self-start text-sm">{{$job->employer->name}}</h3>
    <div class="py-6 space-y-4">
        <h3 class="text-xl font-bold group-hover:text-blue-800 transition-colors duration-300">
            <a href="{{$job->url}}" target="_blank">
                {{$job->title}}
            </a>
        </h3>
        <p class="text-sm mt-4">{{$job->schedule}} - {{$job->salary}}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag></x-tag>
            @endforeach
        </div>
        <x-employer-logo :size="42"></x-employer-logo>
    </div>
</x-panels>