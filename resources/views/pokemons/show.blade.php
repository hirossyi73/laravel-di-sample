<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
        <h1>{{ $pokemon->name }}の詳細</h1>
        <p>ID: {{ $pokemon->id }}</p>
        <p>名前: {{ $pokemon->name }}</p>
        <a href="{{ route('pokemons.index') }}">戻る</a>
    </body>
</html> 
