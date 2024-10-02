<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
        <h1>ポケモン図鑑</h1>
        <ul>
            @foreach($pokemons as $pokemon)
                <li>
                    <a href="{{ route('pokemons.show', $pokemon->id) }}">
                        {{ $pokemon->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </body>
</html> 
