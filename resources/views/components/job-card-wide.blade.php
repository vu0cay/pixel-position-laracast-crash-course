@props(['job'])

<x-panels class="flex gap-x-6">
    <div class="self-center ">
        <x-employer-logo></x-employer-logo>
    </div>
    
    <div class="flex-1 flex flex-col">
        <a class="self-start text-sm text-gray-400">{{$job->employer->name}}</a>
        <h3 class="text-xl mt-3 font-bold group-hover:text-blue-800 transition-colors duration-300">
            <a href="{{$job->url}}" target="_blank">
                {{$job->title}}
            </a>
        </h3>
        <p class="text-sm mt-auto text-gray-400">{{$job->schedule}} - From {{$job->salary}}</p>
    </div>

    <div class="grid grid-rows-2 text-right">
        <div class="self-start ">
            <x-tag :isTag="false" value="Remote"></x-tag>
            <x-tag :isTag="false" value="22h"></x-tag> 
        </div>
        
        <div class="self-end">
            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag></x-tag>
            @endforeach
        </div>
    </div>
</x-panels>