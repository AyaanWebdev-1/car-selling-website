@props(['title'=>''])

<x-base-layout :$title>

    <x-layouts.header></x-layouts.header>
     {{$slot}}

    <footer></footer>
</x-base-layout>














