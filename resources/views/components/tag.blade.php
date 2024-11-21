@props(['tag', 'size' => 'base', 'isTag' => true, 'value'])
@php
    $classes = "bg-white/10 hover:bg-white/25 duration-100 rounded-xl ";

    if($size === 'small') {
        $classes .= "px-3 py-1 text-2xs";
    }

    if($size === 'base') {
        $classes .= "px-3 py-1 text-sm";
    }
@endphp

@if ($isTag)
    <a href="/tags/{{strtolower($tag->name)}}" class="{{ $classes }}">{{$tag->name}}</a>
@else
    <a class="{{ $classes }}">{{$value}}</a>
@endif