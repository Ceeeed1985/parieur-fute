@extends('layouts.app')


@section('title')
     | Le Blog
@endsection

@section('content')
<section class="container-blog w-full flex flex-col items-center my-10">
    <!-- Conteneur principal -->
    <div class="container mx-auto w-[60%] rounded-lg shadow-md overflow-hidden">
        <!-- Image avec jumbotron -->
        <div class="relative h-96 rounded-t-lg overflow-hidden">
            <img src="{{$post->thumbnail}}" alt="Image article" class="w-full h-full object-cover">
            <!-- Effet jumbotron -->
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center ">
                <h1 class="text-center text-white text-xl md:text-2xl font-bold drop-shadow-lg bg-gray-500 py-10 px-5 backdrop-blur-md shadow-lg shadow-blue-500/50 bg-opacity-40">
                    {{$post->title}}
                </h1>
            </div>
            <!-- Étiquette catégorie -->
            <span class="category-label absolute bottom-0 right-0 bg-yellow-600 text-white text-sm font-semibold px-5 py-1">
                CATEGORIE
            </span>
        </div>

        <!-- Contenu de l'article -->
        <div class="content-section p-12">
            <!-- Texte de l'article -->
            <article class="text-gray-800 leading-relaxed text-lg space-y-4">
                {!! nl2br(e($post->content)) !!}
            </article>
        </div>
    </div>
</section>


@endsection