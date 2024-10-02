<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\PokemonRepositoryInterface;
use App\Repositories\PokemonMockRepository;
use App\Repositories\PokemonApiRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // 以下、追加
        $this->app->bind(PokemonRepositoryInterface::class, function ($app) {
            // テスト環境またはconfigで指定されている場合はMockリポジトリを使用
            if ($app->environment('testing') || config('app.use_mock_pokemon_api')) {
                return new PokemonMockRepository();
            }

            // それ以外の場合は実際のAPIリポジトリを使用
            return new PokemonApiRepository();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
