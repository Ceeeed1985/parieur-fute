@extends('layouts.app')

@section('title')
     | Home
@endsection

@section('content')
{{-- <p>bienvenue</p> --}}
<div class="w-full bg-gray-100 pt-10">
  <div class="flex items-end h-[75vh]">
    <!-- Colonne 1 : Image -->
    <div class="w-[30%] pl-10 mx-auto flex flex-col items-center ">
      <img src="images/ronaldo.png" alt="Image description" class="w-full h-auto hidden sm:block">
    </div>
    <!-- Colonne 2 : Texte + Bouton -->
    <div class="w-[70%] mx-20 my-10 bg-white border-0 rounded-lg flex flex-col justify-center pb-10 self-start">
      <h2 class="text-2xl mb-4 bg-gray-800 text-white p-5 border-0 rounded-t-lg text-center font-bold">Parce que jamais <span class="text-yellow-600">parier</span> n’a été aussi <span class="text-yellow-600">simple !</span></h2>
      <p class="p-5 text-gray-800">Grâce au Parieur Futé, parier devient un jeu d’enfant. Fini les longues heures de recherche et d’hésitation ! Nous vous fournissons des pronostics fiables, clairs, et accessibles à tous. Plus besoin d’être un expert pour tenter votre chance, il vous suffit de suivre nos recommandations et vous êtes prêts à parier.</p>
      <h3 class="text-xl text-gray-800 px-5">Passez à la vitesse supérieure</h3>
      <p class="p-5 text-gray-800">Inscrivez-vous dès maintenant, copiez le pari que nous vous proposons, et commencez à récolter vos gains. C’est simple, rapide et sécurisé. Ne laissez plus les opportunités vous filer entre les doigts, rejoignez notre communauté de parieurs gagnants dès aujourd’hui !</p>
      <a href="#" class="bg-yellow-600 text-white m-auto py-2 px-4 rounded">Je passe à l'action</a>
      <img src="ton_image.jpg" alt="Image description" class="w-full h-auto hidden sm:hidden">
    </div>
  </div>
</div>


<!--Ligne de séparation avec bouton-->
<div class="w-full bg-gray-800 border-t-8 border-yellow-600 pb-2">
  <a href="#"><img src="images/ball2.png" alt="Image description" class="mx-auto h-12 w-12 mt-2 animate-spin360"></a>
</div>

{{-- <!--Deuxième partie de la page sur les sports-->

<div class="w-full bg-gray-800 pt-5">
  <div class="text-white max-w-6xl mx-auto">
    <h2 class="text-7xl text-center py-5">Nos choix ? <span class="text-yellow-600 font-semibold">Vos gains !</span></h2>
    <p class="text-md pb-8">Que ce soit le football, le basket, le tennis ou le rugby, nous sommes présents sur tous les terrains.</br>
      Notre équipe d'expert analyse en permanence les possibilités, et prennent les meilleures décisions pour vous.</p>
  </div>
</div>

<div class="w-full bg-gray-800 pb-16 flex justify-center">
  <div class="container bg-gray-800 flex justify-center items-center gap-4 m-6 w-full max-w-5xl h-[500px]">
    <div class="card relative flex flex-1 justify-center items-center h-full w-full border-4 border-gray-800 outline outline-2 outline-gray-200 rounded-lg overflow-hidden transition-transform duration-300 ease-in-out hover:flex-[4]">
      <img src="images/card-basket.jpg" alt="" class="object-cover object-center h-full w-full">
      <div class="fond absolute inset-x-0 bottom-0 w-full h-1/5 bg-gray-800 bg-opacity-60 hidden justify-center items-center group-hover:flex">
        <div class="more-info absolute px-4 py-2 text-lg font-medium bg-white border border-white rounded-full">Plus d'infos</div>
      </div>
    </div>
    <div class="card relative flex flex-1 justify-center items-center h-full w-full border-4 border-gray-800 outline outline-2 outline-gray-200 rounded-lg overflow-hidden transition-transform duration-300 ease-in-out hover:flex-[4]">
      <img src="images/card-football.jpg" alt="" class="object-cover object-center h-full w-full">
      <div class="fond absolute inset-x-0 bottom-0 w-full h-1/5 bg-gray-800 bg-opacity-60 hidden justify-center items-center group-hover:flex">
        <div class="more-info absolute px-4 py-2 text-lg font-medium bg-white border border-white rounded-full">Plus d'infos</div>
      </div>
    </div>
    <div class="card relative flex flex-1 justify-center items-center h-full w-full border-4 border-gray-800 outline outline-2 outline-gray-200 rounded-lg overflow-hidden transition-transform duration-300 ease-in-out hover:flex-[4]">
      <img src="images/card-tennis.jpg" alt="" class="object-cover object-center h-full w-full">
      <div class="fond absolute inset-x-0 bottom-0 w-full h-1/5 bg-gray-800 bg-opacity-60 hidden justify-center items-center group-hover:flex">
        <div class="more-info absolute px-4 py-2 text-lg font-medium bg-white border border-white rounded-full">Plus d'infos</div>
      </div>
    </div>
    <div class="card relative flex flex-1 justify-center items-center h-full w-full border-4 border-gray-800 outline outline-2 outline-gray-200 rounded-lg overflow-hidden transition-transform duration-300 ease-in-out hover:flex-[4]">
      <img src="images/card-rugby.jpg" alt="" class="object-cover object-center h-full w-full">
      <div class="fond absolute inset-x-0 bottom-0 w-full h-1/5 bg-gray-800 bg-opacity-60 hidden justify-center items-center group-hover:flex">
        <div class="more-info absolute px-4 py-2 text-lg font-medium bg-white border border-white rounded-full">Plus d'infos</div>
      </div>
    </div>
  </div>
</div> --}}

<!--Troisième partie de la page sur les tarifs-->

<div class="w-full bg-gray-100 pt-5">
  <div class="text-gray-800 max-w-6xl mx-auto">
    <h2 class="text-7xl text-center py-5">Nos formules ? <span class="text-yellow-600 font-semibold">Vos avantages !</span></h2>
    <p class="text-md pb-16">Nous proposons trois formules : Basique pour un accès simple, Intermédiaire avec des fonctionnalités supplémentaires, et Premium pour un service personnalisé et des avantages exclusifs.</br>
      Chacune est conçue pour répondre à vos besoins et budgets.</p>
  </div>
</div>

<div class="bg-gray-100 text-gray-800 relative flex justify-center">
  <div class="gap-24 z-10 flex justify-around max-w-6xl">
    <div class="card w-1/3 bg-white shadow-2xl p-10 flex flex-col rounded-3xl animate-fadeIn">
      <h4 class="tracking-wider text-sm font-semibold">BRONZE PACK</h4>
      <p class="text-xs">Tout ce dont tu as besoin pour commencer</p>
      <p class="text-6xl font-bold my-2">$Free</p>
      <a href="#" class="bg-gray-800 text-white text-base py-2 px-8 border rounded-full text-center my-2 self-center">Start for free</a>
      <p class="text-sm text-gray-800">L'offre comprend :</p>
      <ul>
        <li class="text-sm text-gray-800"><span class="text-gray-400 text-2xl">+</span> Un pronotic par semaine</li>
        <li class="text-sm text-gray-800"><span class="text-gray-400 text-2xl">+</span> Accès à un tableau de bord</li>
      </ul>
    </div>

    <div class="card w-1/3 bg-white shadow-2xl p-10 flex flex-col rounded-3xl animate-fadeIn">
      <h4 class="tracking-wider text-sm font-semibold">SILVER PACK</h4>
      <p class="text-yellow-600 text-xs">Notre Best-Seller</p>
      <div class="flex">
        <p class="text-6xl font-bold my-2">$15</p>
        <p class="text-md ml-5 my-4 text-gray-800">USD</br>Par mois</p>
      </div>
      <a href="#" class="bg-yellow-600 text-white text-base py-2 px-8 border rounded-full text-center my-2 self-center">Start for free</a>
      <p class="text-sm text-gray-800">L'offre comprend :</p>
      <ul>
        <li class="text-sm text-gray-800"><span class="text-gray-400 text-2xl">+</span> 5 pronos par semaine minimum</li>
        <li class="text-sm text-gray-800"><span class="text-gray-400 text-2xl">+</span> Accès à un tableau de bord</li>
        <li class="text-sm text-gray-800"><span class="text-gray-400 text-2xl">+</span> eBook gratuit "Diminuer les pertes, optimiser le gains"</li>
      </ul>
    </div>

    <div class="card w-1/3 bg-white shadow-2xl p-10 flex flex-col rounded-3xl animate-fadeIn">
      <h4 class="tracking-wider text-sm font-semibold">OR PACK</h4>
      <p class="text-xs">Tout ce dont tu as besoin pour commencer</p>
      <div class="flex">
        <p class="text-6xl font-bold my-2">$153</p>
        <p class="text-md ml-5 my-4 text-gray-800">USD</br>Par an</p>
      </div>
      <a href="#" class="bg-gray-800 text-white text-base py-2 px-8 border rounded-full text-center my-2 self-center">Start for free</a>
      <p class="text-sm text-gray-800">L'offre comprend :</p>
      <ul>
        <li class="text-sm text-gray-800"><span class="text-gray-400 text-2xl">+</span> 5 pronos par semaine minimum</li>
        <li class="text-sm text-gray-800"><span class="text-gray-400 text-2xl">+</span> Accès à un tableau de bord</li>
        <li class="text-sm text-gray-800"><span class="text-gray-400 text-2xl">+</span> eBook gratuit "Diminuer les pertes, optimiser le gains"</li>
        <li class="text-sm text-gray-800"><span class="text-gray-400 text-2xl">+</span> -15 % de réduction sur l'année</li>
      </ul>
    </div>
  </div>
  <div class="bg-gradient-to-br from-yellow-500 to-purple-500 h-96 w-full absolute z-0 top-36 border rounded-3xl flex justify-around items-end pb-7">
    <img src="images/paypal.png" alt="Image description" class="h-10 animate-bounce">
    <img src="images/shopify.png" alt="Image description" class="h-10 animate-bounce">
    <img src="images/visa.png" alt="Image description" class="h-10 animate-bounce">
    <img src="images/applepay.png" alt="Image description" class="h-10 animate-bounce">
  </div>

</div>

<!--Troisème partie : le blog-->

<div class="w-full bg-gray-100 text-gray-800 mt-20 pt-10 ">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-7xl text-center py-5">Nos derniers articles <span class="text-yellow-600 font-semibold ">de blog</span></h2>
    <p class="text-md text-center pb-16">Parce que gagner aux paris sportifs, c'est aussi adopter des comportements intelligents et responsables.</br>
    Prenez la peine de lire nos articles basés sur plusieurs années d'expériences. </br>
    C'est une mine d'or en conseils, qui peuvent réellement faire la différence entre gagner et perdre, et sur le long termes</p>
  </div>
</div>


<div class="w-full mx-auto bg-gray-100 text-gray-800 flex justify-center pb-20">
  <div class="max-w-6xl flex justify-around gap-6">
    @foreach($posts as $post)
    <div class="card hover:outline hover:outline-3 hover:p-1 outline-gray-800 border-0 shadow-card-blog rounded-lg bg-white cursor-pointer overflow-hidden pb-5 flex flex-col">
      {{-- <img src="images/card-basket.jpg" alt="" class="bg-white w-[450px] h-[200px] pb-3 rounded-lg"> --}}
      <img src="{{$post->thumbnail}}" alt="" class="bg-white w-[450px] h-[200px] pb-3 rounded-lg">
      <div class="infos-blog px-5 flex flex-col">
        <h2 class="text-2xl text-center pb-1">{{$post->title}}</h2>
        <p class="pb-3 text-justify">{{$post->excerpt}}</p>
        <a href="{{route('posts.show', ['post' => $post])}}" class="bg-gray-800 text-white text-base py-2 px-8 border rounded-full text-center my-2 self-center">Lire plus</a>
        <div class="separator border-b-2 pt-3"></div>
        <div class="infos-publication flex justify-between text-xs pt-3">
          <span> Publié le {{$post->updated_at}}</span>
          <span>Cédric Truyen </span>
        </div>
      </div>
    </div>
    @endforeach

    {{-- <div class="card hover:outline hover:outline-3 hover:p-1 outline-gray-800 border-0 shadow-card-blog rounded-lg bg-white cursor-pointer overflow-hidden pb-5 flex flex-col">
      <img src="images/card-tennis.jpg" alt="" class="bg-white w-[450px] h-[200px] pb-3 rounded-lg">
      <div class="infos-blog px-5 flex flex-col">
        <h2 class="text-2xl text-center pb-1">Titre du 2ème article</h2>
        <p class="pb-3 text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, facere dolor unde eligendi placeat suscipit.</p>
        <a href="#" class="bg-gray-800 text-white text-base py-2 px-8 border rounded-full text-center my-2 self-center">Lire plus</a>
        <div class="separator border-b-2 pt-3"></div>
        <div class="infos-publication flex justify-between text-xs pt-3">
          <span> Publié le 03/09/2024</span>
          <span>Cédric Truyen </span>
        </div>
      </div>
    </div>

    <div class="card hover:outline hover:outline-3 hover:p-1 outline-gray-800 border-0 shadow-card-blog rounded-lg bg-white cursor-pointer overflow-hidden pb-5 flex flex-col">
      <img src="images/card-football.jpg" alt="" class="bg-white w-[450px] h-[200px] pb-3 rounded-lg">
      <div class="infos-blog px-5 flex flex-col">
        <h2 class="text-2xl text-center pb-1">Titre du 3ème article</h2>
        <p class="pb-3 text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, facere dolor unde eligendi placeat suscipit.</p>
        <a href="#" class="bg-gray-800 text-white text-base py-2 px-8 border rounded-full text-center my-2 self-center">Lire plus</a>
        <div class="separator border-b-2 pt-3"></div>
        <div class="infos-publication flex justify-between text-xs pt-3">
          <span> Publié le 03/09/2024</span>
          <span>Cédric Truyen </span>
        </div>
      </div>
    </div>

    <div class="card hover:outline hover:outline-3 hover:p-1 outline-gray-800 border-0 shadow-card-blog rounded-lg bg-white cursor-pointer overflow-hidden pb-5 flex flex-col">
      <img src="images/card-rugby.jpg" alt="" class="bg-white w-[450px] h-[200px] pb-3 rounded-lg">
      <div class="infos-blog px-5 flex flex-col">
        <h2 class="text-2xl text-center pb-1">Titre du 4ème article</h2>
        <p class="pb-3 text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, facere dolor unde eligendi placeat suscipit.</p>
        <a href="#" class="bg-gray-800 text-white text-base py-2 px-8 border rounded-full text-center my-2 self-center">Lire plus</a>
        <div class="separator border-b-2 pt-3"></div>
        <div class="infos-publication flex justify-between text-xs pt-3">
          <span> Publié le 03/09/2024</span>
          <span>Cédric Truyen </span>
        </div>
      </div>
    </div> --}}
    
  </div>
</div>



  @endsection