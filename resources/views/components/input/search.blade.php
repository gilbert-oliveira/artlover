<div {{$attributes->merge(['class' => 'relative text-gray-500 w-full'])}}>

    <input type="text" {{$attributes->except('class')}}
    class="w-full bg-transparent border-none focus:shadow-md focus:outline-none focus:ring-0 focus:bg-white rounded-lg pr-0 py-1 pl-8">

    <x-icon.search class="w-4 h-4 absolute top-2 left-2"/>
</div>
