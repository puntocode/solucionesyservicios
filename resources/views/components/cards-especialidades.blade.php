<div class="bg-white rounded-lg flex flex-col sm:flex-row px-4 py-10 sm:p-8">
    <div class="rounded-full bg-gray-100 h-24 w-24 self-center flex-shrink-0 flex justify-center">
        {{ $image }}
    </div>
    <div class="ml-5 text-left">
        <h3 class="pt-5 md:pt-0 text-xl text-steel-400">{{ $title }}</h3>
        <p class="text-gray-500">{{ $slot }}</p>
    </div>
</div>
