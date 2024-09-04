

{{-- <!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
  </button> --}}
  
  <!-- Main modal -->
  <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative rounded-lg shadow bg-zeembi-black">
              <!-- Modal header -->
              <div class="flex items-center p-2 md:p-3 border-b border-zeembi-gray rounded-t">
                {{-- Search input --}}
                {{-- <div class="w-100 grow bg-red-100">
                </div> --}}
                <input type="text" id="search" name="search" placeholder="Type here to search" class="grow rounded-md font-medium text-slate-100 px-3 border-0 outline-0 focus:border-0 focus:outline-0 focus:ring-0 placeholder:text-gray-500 placeholder:font-normal bg-transparent">
                
                {{-- Shortcut text --}}
                {{-- <small class="hidden lg:block py-1 px-2 mr-2 bg-gray-500 bg-opacity-20 rounded-md">
                    Ctrl K
                </small> --}}
                <kbd class="hidden lg:inline-block mr-3 px-2 py-1.5 text-xs font-semibold text-gray-400 cursor-default">Escape</kbd>
                
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
              </div>
              <!-- Modal body -->
              <div class="w-full h-full p-4 md:p-5 space-y-4 bg-zeembi-black overflow-y-auto">
                <x-search-result-component/>
                <x-search-result-component/>
                <x-search-result-component/>
                <x-search-result-component/>
                <x-search-result-component/>
              </div>
          </div>
      </div>
  </div>
  