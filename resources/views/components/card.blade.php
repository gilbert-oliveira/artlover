@props(['title', 'icon' => null])

<div class="bg-white rounded-lg p-8">

    <div class="flex mb-8 items-center justify-between">

        <h3 class="font-bold text-xl text-gray-700">{{ $title }}</h3>

        @if($icon)

            <x-dynamic-component :component="'icon.'.$icon" class="w-6 h-6 text-gray-700"/>
        @endif
    </div>

    <div class="space-y-4">

        {{ $slot }}
    </div>
</div>
