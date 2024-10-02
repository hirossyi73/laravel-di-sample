<?php
namespace App\Http\Controllers;

use App\Repositories\PokemonMockRepository;

class OldPokemonController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new PokemonMockRepository();
    }

    public function index()
    {
        $pokemons = $this->repository->all();
        return view('pokemons.index', compact('pokemons'));
    }

    public function show($id)
    {
        $pokemon = $this->repository->find($id);
        return view('pokemons.show', compact('pokemon'));
    }
}
