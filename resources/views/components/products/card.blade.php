@props(['title', 'price'])

<div class="rounded-2xl bg-white shadow-md space-y-4 p-5">
    <div class="flex justify-between">

        <h3 class="font-bold text-gray-700">{{$title}}</h3>
        <span class="text-gray-400">{{$price}}</span>
    </div>

    @if($attributes->has('src'))
        <img
            class="rounded-lg w-auto- h-auto"
            {{$attributes->only('src')}}>
    @endif

    <p class="text-sm text-gray-500">{{$slot}}</p>
</div>
