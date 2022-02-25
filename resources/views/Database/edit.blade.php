<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Laravel</title>


</head>

<body>

    <form method="GET"  action="/ludia/{{ $ludia->id }}">
        @method('PUT')
        @csrf
<div class="border-black w-fit mx-auto mt-10 space-y-4">

        <input class="border-2 border-black" name="name" id="name" value="{{$ludia->name}}">
<br>
        <input class="border-2 border-black" name="surname" id="surname" value="{{$ludia->surname}}">
<br>
    <button class="border-2 border-green-400 p-2 ">Aktualizovať</button>

    </form>


    <form action="/ludia/{{$ludia->id}}">
        @csrf
        @method('DELETE')

        <button class="border-2 border-green-400 p-2 ">Delete Person</button>

    </form>

<p>
    <a class="text-blue-500 hover:text-black font-bold text-2xl" href="/">Go back</a>
</p>

    </div>
</body>
</html>
