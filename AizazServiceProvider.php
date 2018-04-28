<?php

namespace aizaztag\Facebook;

use Illuminate\Support\ServiceProvider;
use aizaztag\Facebook\Facades\Aizaz;
use aizaztag\Facebook\Liabrary\Aizaz as libraryAizaz;


class AizazServiceProvider extends ServiceProvider
{
    public function boot()
    {
     $this->loadRoutesFrom(__DIR__."/routes.php"); 
     $this->publishes([
        __DIR__.'/Config/facebook.php' => config_path('facebook.php'),
    ]);
    $this->loadViewsFrom(__DIR__.'/Views' , 'aizaz');
    $this->publishes([
        __DIR__.'/Views' => resource_path('views/vendor/aizaz'),
    ]);

  
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
         $this->app->bind('aizaz'  ,function($app){
             return  new libraryAizaz(config('facebook.fb'));
         });

     }
}
