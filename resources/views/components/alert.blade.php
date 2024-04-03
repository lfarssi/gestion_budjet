@props(['type'])

<div class="rounded-lg p-4 border border-green-700 bg-green-900 text-green-200 shadow-inner" role="alert">
    <div class="flex items-center">
        <div class="py-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <div>
            <p class="font-semibold text-green-400">{{ $slot }}</p>
        </div>
    </div>
</div>
