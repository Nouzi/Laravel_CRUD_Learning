<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>Laravel</title>


    </head>

    <body class="space-y-4">
      <h1 class="text-3xl font-bold text-red-500 text-center mt-8"> Hello world </h1>
      <div class="flex justify-center gap-10">
<div>
     @foreach($ludia as $clovek)
         <div class="flex space-x-4 w-fit mx-auto text-2xl font-semibold text-green-500">
         <p>{{$clovek->name}}</p>
         <p>{{$clovek->surname}}</p>
             <p class="text-blue-500 hover:text-black"><a href="/ludia/{{$clovek->id}}/edit">Click for edit</a> </p>
         </div>
      @endforeach
</div>
    
    <div>
        <p>
            <a class="border-2 p-2 border-green-400 text-blue-500 hover:text-black font-bold text-2xl" href="/create">Add New Person</a>
        </p>
    </div>
      </div>
    </body>
</html>
