<a href="#" {{ $attributes->merge(["class" => "flex items-center gap-2 w-max p-1 rounded-md"]) }}>
    {{-- Coin icon --}}
    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="1" y="1" width="16" height="16" rx="8" fill="#F9B609"/>
        <rect x="1" y="1" width="16" height="16" rx="8" stroke="#FFD15B" stroke-width="2"/>
        <rect opacity="0.5" x="12.1101" width="5.39835" height="17.1803" transform="rotate(36.0487 12.1101 0)" fill="#FFD15B"/>
        <path opacity="0.96" d="M12.0293 6.8252C11.9453 7.01465 11.874 7.19629 11.8154 7.37012C11.7568 7.54395 11.709 7.71191 11.6719 7.87402C11.6367 8.03418 11.6104 8.18848 11.5928 8.33691C11.5771 8.4834 11.5693 8.625 11.5693 8.76172C11.5693 9.02148 11.5957 9.26074 11.6484 9.47949C11.7012 9.69629 11.7695 9.89551 11.8535 10.0771C11.9375 10.2568 12.0322 10.4199 12.1377 10.5664C12.2432 10.7129 12.3477 10.8438 12.4512 10.959C12.3691 10.9492 12.291 10.9414 12.2168 10.9355C12.1426 10.9297 12.0723 10.9268 12.0059 10.9268C11.9043 10.9268 11.8076 10.9326 11.7158 10.9443C11.624 10.9561 11.5332 10.9736 11.4434 10.9971C11.3535 11.0186 11.2627 11.0469 11.1709 11.082C11.0791 11.1172 10.9814 11.1582 10.8779 11.2051C10.7666 10.8887 10.6787 10.5693 10.6143 10.2471C10.5518 9.92285 10.5117 9.59375 10.4941 9.25977C10.3535 9.53906 10.2344 9.83008 10.1367 10.1328C10.0391 10.4355 9.97168 10.7607 9.93457 11.1084C9.91113 11.1084 9.85938 11.1094 9.7793 11.1113C9.69922 11.1133 9.60254 11.1191 9.48926 11.1289C9.37793 11.1387 9.25684 11.1533 9.12598 11.1729C8.99707 11.1943 8.87109 11.2246 8.74805 11.2637C8.71484 10.8867 8.65137 10.5371 8.55762 10.2148C8.46387 9.89062 8.34375 9.58203 8.19727 9.28906C8.1582 9.94922 8.03223 10.5879 7.81934 11.2051C7.40723 11.0195 6.96484 10.9268 6.49219 10.9268C6.41406 10.9268 6.33496 10.9297 6.25488 10.9355C6.1748 10.9414 6.09375 10.9492 6.01172 10.959C6.36328 10.5879 6.63086 10.1729 6.81445 9.71387C7 9.25488 7.09277 8.75 7.09277 8.19922C7.09277 8.05859 7.08691 7.91602 7.0752 7.77148C6.90527 7.59961 6.72656 7.42969 6.53906 7.26172C6.35156 7.09375 6.15234 6.92188 5.94141 6.74609C5.97656 6.75586 6.02148 6.76855 6.07617 6.78418C6.13086 6.79785 6.19531 6.81152 6.26953 6.8252C6.34375 6.83887 6.42578 6.85059 6.51562 6.86035C6.60547 6.86816 6.70312 6.87207 6.80859 6.87207C6.99609 6.87207 7.20215 6.85156 7.42676 6.81055C7.65332 6.76953 7.89355 6.69238 8.14746 6.5791C8.29395 6.84082 8.43945 7.13086 8.58398 7.44922C8.64453 7.58398 8.70801 7.73242 8.77441 7.89453C8.84277 8.05664 8.91016 8.22949 8.97656 8.41309C9.04297 8.59473 9.10742 8.78613 9.16992 8.9873C9.23438 9.18848 9.29395 9.39746 9.34863 9.61426C9.46191 9.2959 9.56934 9 9.6709 8.72656C9.77441 8.45312 9.87012 8.19238 9.95801 7.94434C10.0459 7.69434 10.124 7.45215 10.1924 7.21777C10.2627 6.9834 10.3213 6.74414 10.3682 6.5C10.5049 6.58203 10.6514 6.64551 10.8076 6.69043C10.9639 6.7334 11.1172 6.76562 11.2676 6.78711C11.418 6.80664 11.5596 6.81836 11.6924 6.82227C11.8271 6.82422 11.9395 6.8252 12.0293 6.8252Z" fill="#C86C39"/>
        <circle cx="9" cy="9" r="6.5" stroke="#C68E00" stroke-opacity="0.5"/>
        </svg>
        
    <span>100</span>
    {{ $slot }}
</a>