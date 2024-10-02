<?php
namespace App\Repositories;

use App\Models\Pokemon;

class PokemonMockRepository implements PokemonRepositoryInterface
{
    private $pokemons = [];

    public function __construct()
    {
        $this->pokemons = [
            new Pokemon(1, 'フシギダネ'),
            new Pokemon(2, 'フシギソウ'),
            new Pokemon(3, 'フシギバナ'),
            new Pokemon(4, 'ヒトカゲ'),
            new Pokemon(5, 'リザード'),
            new Pokemon(6, 'リザードン'),
        ];
    }

    public function all()
    {
        return $this->pokemons;
    }

    public function find($id)
    {
        return collect($this->pokemons)->firstWhere('id', $id);
    }
}
