<div class="group/item w-full mb-1 bg-zeembi-black shadow hover:bg-zeembi-gray">
    <button class="w-full h-24 border-0 outline-0 ring-0 flex items-center">
        {{-- Image --}}
        <div class="shrink-0 w-20 h-full overflow-hidden">
            <img src="{{ asset('images/prototype.jpg') }}" alt="prototype" class="w-full h-full object-contain object-left">
        </div>

        {{-- Content --}}
        <div class="h-full overflow-hidden grow p-2 ml-1 border-l border-gray-400 text-slate-100 text-start">
            <h2 class="mb-1">I Am Carrying Gold From</h2>
            <small class="text-slate-200 line-clamp-2">
                Chapter 4: 
                <span class="text-slate-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, eligendi.
                </span>
            </small>
        </div>

        {{-- Delete history button --}}
        {{-- <div class="shrink-0 w-12 h-1/2 border-l border-gray-400 flex items-center justify-center">
            <span class="block">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="#f6f6f6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </span>
        </div> --}}

        {{-- Explore button --}}
        <div class="shrink-0 w-12 h-1/2 flex items-center justify-center">
            <svg class="opacity-0 group-hover/item:opacity-100 group-hover/item:animate-bounce" viewBox="0 0 24 24" width="20" height="20" stroke="#ffffff50" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
        </div>
    </button>
</div>