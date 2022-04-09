<div x-data="{
        on: false
    }"
     class="flex items-center justify-between w-full">

    <div class="cursor-pointer"
         @click="on = !on">

        {{$slot}}
    </div>

    <div @click="on = !on"
         class="relative w-11 h-6 border-2 bg-gray-300 border-gray-300 rounded-full cursor-pointer"
         :class="{'bg-primary-500 border-primary-500': on, 'bg-gray-300 border-gray-300': !on}">

        <div class="bg-white rounded-full w-5 h-5 transform-gpu transition-transform"
             :class="{'translate-x-5': on}"></div>
    </div>
</div>
