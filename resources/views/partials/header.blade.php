{{-- Fichier contenant mon header et ma navigation --}}

<header class="flex justify-around bg-gray-800 items-center py-3">


    
    <h1 class="text-yellow-600 text-4xl font-marker"><a href="#">Parieur futé</a></h1>

    <nav>
        <ul class="flex justify-around text-gray-100">
            <li class="px-4 hover:border-b-2 hover:border-yellow-600 active:text-yellow-600 active:font-semibold py-3"><a href="{{ url('/') }}">Accueil</a></li>
            <li class="px-4 hover:border-b-2 hover:border-yellow-600 py-3"><a href="{{route('pronos')}}">Nos pronos</a></li>
            <li class="px-4 hover:border-b-2 hover:border-yellow-600 py-3"><a href="#">Nos résultats</a></li>
            <li class="px-4 hover:border-b-2 hover:border-yellow-600 py-3"><a href="#">Blog</a></li>
            <li class="px-4 hover:border-b-2 hover:border-yellow-600 py-3"><a href="#">Contacts</a></li>
        </ul>
    </nav>

    <ul class="flex justify-around text-gray-100">
        <li class="border-2 rounded-md px-10 py-2 hover:bg-white hover:text-gray-800 transition-colors duration-700 mr-2"><a href="{{ route('login') }}">Log in</a></li>
        <li class="border-2 border-yellow-600 text-yellow-600 font-bold rounded-md px-10 py-2 hover:bg-yellow-600 hover:text-white transition-colors duration-700"><a href="{{ route('register') }}">Sign up</a></li>
    </ul>
            
            
</header>