@extends('layouts.app')


@section('title')
     | Nos pronos
@endsection

@section('content')
    <h1 class="text-3xl text-center pt-5 pb-12">Page des pronostics</h1>
    <section class="container-pronos w-full flex justify-center gap-10 py-10 flex-wrap">
        <section class="cards-pronos w-[400px] rounded-lg shadow-xl mb-10">
            <section class="bg-gray-800 py-3 rounded-t-lg flex flex-col justify-center items-center">
                <h2 class="text-yellow-600 text-3xl font-bold">Football</h2>
                <article class="text-lg text-gray-100 font-bold">
                    <span class="player1">Manchester United</span> - <span class="player1">Real Madrid</span>
                </article>
                <span class="date-prono text-white">22/11/2024 - 20.30 hrs</span>
            </section>
            <section class="container-infos-prono w-full bg-cover bg-center h-64 flex flex-col justify-center items-center relative" style="background-image: url('images/card-football.jpg')">
                <article class="w-[300px] h-[100px] border-2 bg-gray-100 bg-opacity-40 border-white border-opacity-50 rounded-2xl backdrop-blur-md shadow-lg shadow-blue-500/50 flex justify-center items-center px-8 flex-col">
                    <p class="pronostic text-xl font-bold">Victoire du Real Madrid</p>
                </article>
                <article class="infos-cote absolute bottom-0 right-0 text-yellow-600 text-lg font-bold bg-gray-100 px-8 py-2 flex">
                    <p>Cote : </p>
                    <span class="cote pl-2">1.5</span>
                </article>
            </section>
            <section class="resume py-10 px-10 text-justify">
                <p class="pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum fugit ducimus, dolores nesciunt fugiat, reprehenderit quos quidem maxime sapiente facilis alias eos ab, reiciendis quam?</p>
                <a href="#" class="text-lg font-semibold btn-more w-full bg-gray-800 text-white py-2 flex justify-center rounded-md hover:text-yellow-600 transition-colors duration-700">Voir plus +</a>
            </section>
        </section>
    </section>
@endsection


