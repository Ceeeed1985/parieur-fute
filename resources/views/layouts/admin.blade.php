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

    @include("partials.adminheader")
    <main class="w-[90%] m-auto flex justify-center my-10 gap-10">
        @include("partials.adminmenu")
        @yield("content")
    </main>
    @include("partials.adminfooter")

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>