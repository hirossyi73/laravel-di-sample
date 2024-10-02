<?php
//API連携実施

namespace App\Repositories;

use App\Models\Pokemon;
use Illuminate\Support\Facades\Http;

class PokemonApiRepository implements PokemonRepositoryInterface
{
    private $baseUrl = 'https://pokeapi.co/api/v2/';

    public function all()
    {
        $response = Http::get($this->baseUrl . 'pokemon?limit=20');
        $data = $response->json()['results'];

        return collect($data)->map(function ($item, $index) {
            $id = $index + 1;
            return new Pokemon($id, $item['name']);
        })->all();
    }

    public function find($id)
    {
        $response = Http::get($this->baseUrl . "pokemon/{$id}");
        $data = $response->json();

        return new Pokemon($data['id'], $data['name']);
    }
}
