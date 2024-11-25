@extends('layouts.admin')

@section('title')
     | Création d'un pronostic
@endsection

@section('content')
<form action="{{ route('admin.pronostics.store')}}" method="POST" enctype="multipart/form-date">
@csrf
<section class="border-b border-gray-900/10 pb-12 pt-5 px-5 max-w-[760px]">
    <h1 class="text-3xl font-semibold pb-5">Formulaire pronostic</h1>
    <p>Préparez-vous à créer votre pronostic, c'est par ici que ça se passe. Remplissez bien tous les champs, avant de cliquer sur publier !</p>

    <div class="text-sm datehour mt-5 flex justify-between items-center flex-wrap border p-5 rounded-lg bg-gray-50">
        <div class="date flex flex-col">
            <label class="font-semibold mb-2" for="date">Date du match</label>
            <input class="min-w-[325px] pl-2 border border-gray-200 rounded" type="date" name="date">
        </div>
        <div class="hour flex flex-col">
            <label class="font-semibold mb-2" for="hours">Début du match</label>
            <input class="min-w-[300px] pl-2 border border-gray-200 rounded"" type="time" name="hours">
        </div>
    </div>

    <div class="text-sm infos-sport mt-3 flex flex-col border p-5 rounded-lg bg-gray-50">
            <label class="font-semibold mb-2" for="sport">Sport / compétition</label>
            <input class="border border-gray-200 rounded" type="text" name="sport">
        <div class="text-sm datehour mt-3 flex flex-col sm:flex-row sm:justify-between sm:items-end">
            <div class="date flex flex-col">
                <label class="font-semibold mb-2" for="team1">Equipe 1 / joueur 1</label>
                <input class="min-w-[325px] pl-2 text-center border border-gray-200 rounded mb-2" type="text" name="team1">
            </div>
            <span class="font-bold text-center mb-2">VS</span>
            <div class="date flex flex-col">
                <label class="font-semibold mb-2" for="team2">Equipe 2 / joueur 2</label>
                <input class="min-w-[300px] pl-2 text-center border border-gray-200 rounded mb-2" type="text" name="team2">
            </div>
        </div>
        <div class="flex flex-col">
            <label class="font-semibold mb-2" for="pronostic">Le pronostic</label>
            <input class=" pl-2 text-center border border-gray-200 rounded mb-2" type="text" name="pronostic">
        </div>
        <div class="flex flex-col">
            <label class="font-semibold mb-2" for="cote">Cote</label>
            <input class="max-w-[75px] pl-2 py-2 text-xl text-center text-green-700 border border-gray-200 rounded mb-2" type="text" name="cote">
        </div>
    </div>

    <div class="text-sm infos-sport mt-3 flex flex-col border p-5 rounded-lg bg-gray-50">
        <label class="font-semibold mb-2" for="sport">Sport / compétition</label>
        <input class="border border-gray-200 rounded" type="text" name="sport">



</section>

</form>
  @endsection