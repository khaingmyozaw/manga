 <div id="drawer-navigation" class="mt-16 fixed top-0 left-0 z-40 w-3/4 md:w-1/2 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-zeembi-black" tabindex="-1" aria-labelledby="drawer-navigation-label">
   {{-- Logo --}}
   <div class="mt-12 py-5 flex gap-3 items-center border-b border-zeembi-gray">
      <x-avator-component/>
      <div>
         <h3 class="text-white font-medium flex gap-2">
            Jhon Doe
            <x-coin-card-component class="shrink-0 px-2 bg-zeembi-gray"/>
         </h3>
         <small class="text-gray-300">
            @jhon-doe
         </small>
      </div>
   </div>

      {{-- Close Button --}}
     <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-zeembi-gray hover:text-gray-100 rounded-lg text-sm p-1.5 absolute top-3 end-3 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
         <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
         <span class="sr-only">Close menu</span>
     </button>

   <div class="py-4 overflow-y-auto">
       <ul class="mt-10 space-y-2 font-medium">
          
         <x-sidebar-item-component :content="'Home'">

            <svg class="flex-shrink-0 w-5 h-5 text-gray-300 transition duration-75 group-hover:text-gray-100" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>

         </x-sidebar-item-component>

         <x-sidebar-item-component :content="'Packages'">
            <svg viewBox="0 0 24 24" class="w-5 h-5 text-gray-300 transition duration-75 group-hover:text-gray-100" width="18" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
         </x-sidebar-item-component>

         <x-sidebar-item-component :content="'Latest Releases'">

            <svg class="flex-shrink-0 w-5 h-5 text-gray-300 transition duration-75 group-hover:text-gray-100" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>

         </x-sidebar-item-component>

         <x-sidebar-item-component :content="'Popular'">

          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 80 96"><path d="M18 22C13.3 25.9 2.7 38.1 4 66 8.5 96.5 40 96 40 96s35.3-0.4 36-36S47 2 47 2s13.4 34-9 37C15.2 41.6 18 22 18 22ZM56 40s12.4 24-4 38c-3.2 3.7-22.9 8.6-28-4-5.2-15.2 7-18.9 12-19C57.4 54.4 56 40 56 40Z" fill="#B9090B"/></svg>

         </x-sidebar-item-component>

         <li>
             <button data-dropdown-toggle="dropdown" class="w-full text-start flex items-center p-2 text-gray-100 rounded-lg dark:text-white hover:bg-zeembi-gray dark:hover:bg-gray-700 group css-i6dzq1">
               <svg viewBox="0 0 24 24" class="w-5 h-5 text-gray-300 transition duration-75 group-hover:text-gray-100" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Browse</span>

                <svg viewBox="0 0 24 24" width="18" height="18" stroke="#ffffff40" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
             </button>
         </li>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-zeembi-gray divide-y divide-gray-100 rounded-md shadow w-4/5 h-2/4 overflow-auto">
               <ul class="py-2 text-sm text-gray-100 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                 </li>
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                 </li>
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                 </li>
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                 </li>
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                 </li>
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                 </li>
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                 </li>
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                 </li>
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                 </li>
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                 </li>
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                 </li>
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                 </li>
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                 </li>
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                 </li>
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                 </li>
                 <li>
                   <a href="#" class="block my-1 px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                 </li>
               </ul>
           </div>


           <x-sidebar-item-component :content="'Bookmarks'">
            <svg viewBox="0 0 24 24" class="w-5 h-5 text-gray-300 transition duration-75 group-hover:text-gray-100" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
           </x-sidebar-item-component>
       </ul>
    </div>
 </div>
  
   