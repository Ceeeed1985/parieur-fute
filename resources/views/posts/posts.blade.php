@extends('layouts.app')


@section('title')
     | Le Blog
@endsection

@section('content')
    <h1 class="text-3xl text-center pt-5 pb-12">Le Blog</h1>
    <section class="container-pronos w-full flex flex-col items-center">
        
        @foreach($posts as $post)
        <div class="container mx-auto w-[60%] p-5">
            <div class="blog-card flex flex-col md:flex-row bg-gray-800 rounded-lg shadow-md overflow-hidden">
                <!-- Section gauche -->
                <div class="image-section relative w-full md:w-1/3 h-60 md:h-auto">
                    {{-- <img src="images/card-rugby.jpg" alt="Image article" class="w-full h-full object-cover"> --}}
                    <img src="{{$post->thumbnail}}" alt="Image article" class="w-full h-full object-cover">
                    {{-- <span class="category-label absolute top-0 right-0 bg-yellow-600 text-white text-sm font-semibold px-3 py-1 ">
                        {{$post->category_id}}
                    </span> --}}
                    <span class="category-label absolute top-0 right-0 bg-yellow-600 text-white text-sm font-semibold px-3 py-1 ">
                        CATEGORIE
                    </span>
                </div>
        
                <!-- Section droite -->
                <div class="content-section w-full md:w-2/3 flex flex-col justify-between px-10 py-5">
                    <h2 class="title text-xl md:text-xl font-bold text-yellow-600 mb-3 border-b-2 border-yellow-600">
                        {{$post->title}}
                    </h2>
                    <!-- Extrait -->
                    <p class="excerpt text-gray-300 mb-5">
                        {{$post->excerpt}}
                    </p>
                    <!-- Bouton -->
                    <a href="#" class="mx-auto read-more bg-yellow-600 text-white text-sm font-semibold py-2 px-4 rounded-md text-center hover:bg-yellow-700 transition duration-300">
                        Lire plus
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
    </section>
@endsection