<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use function foo\func;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
     app()->singleton("lang",function(){
         if (session()->has("lang")){
           return  session()->get("lang");
         }else{
             return "en";
         }
     });
    }
}
