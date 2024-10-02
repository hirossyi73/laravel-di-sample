<?php

namespace App\Repositories;

interface PokemonRepositoryInterface
{
    public function all();
    public function find($id);
}
