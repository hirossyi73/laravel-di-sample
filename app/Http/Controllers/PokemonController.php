<?php
// コントローラー
namespace App\Http\Controllers;

use App\Repositories\PokemonRepositoryInterface;

class PokemonController extends Controller
{
    public function __construct(protected PokemonRepositoryInterface $repository)
    {
    }

    public function index()
    {
        $pokemons = $this->repository->all();
        return view('pokemons.index', compact('pokemons'));
    }

    public function show($id)
    {
        $pokemon = $this->repository->find($id);
        if ($pokemon) {
            return view('pokemons.show', compact('pokemon'));
        }
        return abort(404);
    }
}
