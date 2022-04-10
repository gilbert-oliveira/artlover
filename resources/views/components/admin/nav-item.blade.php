@props(['icon', 'isActive' => false])

<a href="#" class="{{$isActive ? 'font-bold text-gray-800' : 'text-gray-400 hover:text-gray-600'}} flex flex-col items-center justify-center transform duration-2002">
    <x-dynamic-component :component="'icon.'.$icon" class="w-6 h-6"/>
    <span>{{$slot}}</span>
</a>
