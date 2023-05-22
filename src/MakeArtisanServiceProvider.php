<?php

namespace bushart\MakeArtisan;
use Illuminate\Support\ServiceProvider;

class MakeArtisanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->commands([
            Commands\TraitCommand::class,
            Commands\ServiceCommand::class,
            Commands\ViewCommand::class,
        ]);
    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        //

    }
}
