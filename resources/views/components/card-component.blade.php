<div class="snap-start shrink-0 xs:w-1/2 sm:w-1/3 md:w-1/4 lg:w-56 px-2">
    <a href="#" class="group/card_item w-full block rounded-md shadow-md overflow-hidden relative">
        <img src="{{ asset($thumbnail) }}" alt="prototype" class="h-72 w-full object-cover object-center relative">

        <div class="p-4 pt-8 -translate-y-full bg-gradient-to-b from-[#27272705] to-black absolute group-hover/card_item:pb-6 transition-all">
            <h1 class="text-lg text-white font-bold line-clamp-1  group-hover/card_item:underline">
                {{ $title }}
            </h1>
            <div class="flex justify-between items-center">
                <b class="text-gray-100">
                    #{{ $chapter }}
                </b>

                <span class="flex items-center text-gray-300">
                    <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>

                    {{ $viewer }}
                </span>
            </div>
            <p class="text-sm text-gray-300 line-clamp-1">
                {{ $desc }}
            </p>
        </div>
    </a>
</div>
