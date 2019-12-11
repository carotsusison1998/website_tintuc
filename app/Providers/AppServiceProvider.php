<?php

namespace App\Providers;
use App\New_Type_Type;
use App\New_;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('header', function($view){
            $menu = New_Type_Type::skip(3)->take(6)->get();
            $view->with('menu', $menu);
        });
        view()->composer('header', function($view){
            $menu2 = New_Type_Type::get();
            $view->with('menu2', $menu2);
        });

        view()->composer('master', function($master){
            // $rand = DB::table('tintuc')->skip(rand(1, 1000))->get();
            $rand = New_::get()->skip(rand(1, 100));
            $master->with('rand', $rand);
        });
    }
}
