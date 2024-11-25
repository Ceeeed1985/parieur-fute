{{-- <section class="left w-[25%] flex flex-col bg-gray-600 h-screen text-slate-200"> --}}
    <nav>
        <ul class="flex flex-col justify-around">
            <li class="pt-5 pb-1 px-3 text-white font-semibold text-center flex items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                  </svg>                  
                <a href="{{route('admin.home')}}" class="pl-2">DASHBOARD</a>
            </li>
            <li class="pl-16 text-sm hover:bg-gray-800 active:text-yellow-600 active:font-semibold py-1"><a href="{{route('admin.home')}}">Votre dashboard</a></li>
            <li class="pl-16 text-sm hover:bg-gray-800 active:text-yellow-600 active:font-semibold py-1"><a href="{{route('home')}}">Aller sur le site</a></li>
            

            {{-- TITRE PRONOSTICS --}}
            <li class="pt-5 pb-1 px-3 text-white font-semibold text-center flex items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                </svg>
                <span class="pl-2">PRONOSTICS</span>
            </li>
            <li class="pl-16 text-sm hover:bg-gray-800 active:text-yellow-600 active:font-semibold py-1"><a href="{{route('admin.pronostics.index')}}">Tous vos pronos</a></li>
            <li class="pl-16 text-sm hover:bg-gray-800 active:text-yellow-600 active:font-semibold py-1"><a href="{{route('admin.pronostics.create')}}">Créer un nouveau prono</a></li>
            
            {{-- TITRE BLOG --}}
            <li class="pt-5 pb-1 px-3 text-white font-semibold text-center flex items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                  </svg>
                  <span class="pl-2">BLOG</span>
            </li>
            <li class="pl-16 text-sm  hover:bg-gray-800 active:text-yellow-600 active:font-semibold py-1"><a href="">Tous vos articles</a></li>
            <li class="pl-16 text-sm  hover:bg-gray-800 active:text-yellow-600 active:font-semibold py-1"><a href="">Rédiger un nouvel article</a></li>

            {{-- TITRE RESULTATS --}}
            <li class="pt-5 pb-1 px-3 text-white font-semibold text-center flex items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                  </svg>                  
                <a href="{{route('admin.pronostics.index')}}" class="pl-2">RESULTATS</a>
            </li>

            {{-- TITRE CLIENTS --}}
            <li class="pt-5 pb-1 px-3 text-white font-semibold text-center flex items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                  </svg>                                  
                <a href="{{route('admin.pronostics.index')}}" class="pl-2">ABONNES</a>
            </li>

            {{-- TITRE MESSAGES --}}
            <li class="pt-5 pb-1 px-3 text-white font-semibold text-center flex items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
                  </svg>                                                    
                <a href="{{route('admin.pronostics.index')}}" class="pl-2">MESSAGES</a>
            </li>

            {{-- TITRE FORMULES --}}
            <li class="pt-5 pb-1 px-3 text-white font-semibold text-center flex items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.756a4.5 4.5 0 1 0 0 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>                                                                    
                <a href="{{route('admin.pronostics.index')}}" class="pl-2">FORMULES</a>
            </li>
            <li class="pl-16 text-sm hover:bg-gray-800 active:text-yellow-600 active:font-semibold py-1"><a href="">Gérer les formules</a></li>
            <li class="pl-16 text-sm hover:bg-gray-800 active:text-yellow-600 active:font-semibold py-1"><a href="">Ajouter une formule / promotion</a></li>

        </ul>
    </nav>
    <section class="btn-vers-site bg-gray-800 text-yellow-600 px-5 py-3 flex items-center justify-end hover:cursor-pointer group">
        <a href="{{route('home')}}" class="pr-2 font-semibold text-lg">Déconnexion</a>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
          </svg>
          
        {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 transition-opacity duration-300 opacity-0 group-hover:opacity-100 group-hover:color-yellow-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
          </svg> --}}
          
    </section>