<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name','name')}} @yield("title")</title>
    @vite('resources/css/app.css')
</head>

<body>

    {{-- @include("partials.adminheader") --}}
    <main class="w-full flex justify-start overflow-hidden">
        <section class="left w-[25%] flex flex-col justify-between bg-gray-600 h-screen text-slate-200">
            @include("partials.adminmenu")
        </section>
        <section class="w-[75%] container-admin px-5">
            @yield("content")
        </section>
    </main>
    {{-- @include("partials.adminfooter") --}}

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>