<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Models\category;
use App\Models\sub_category;

use Cart;






/// để không bị lỗi S4201 trong migrate

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
       
        View::composer('*', function ($view){
            view()->share(['data2' => Cart::content(), 'data3' => Cart::total(0,',','.')]);
        });

        /// để không bị lỗi S4201 trong migrate
        Schema::defaultStringLength(191);
       
        /// gọi hàm bằng package ko có bản

        view()->composer('page.layout', function ($view){
            $category = category::all();
            $view->with('category', $category);
        });

        view()->composer('page.index', function ($view){
            $category2 = category::all();
            $view->with('category2', $category2);
        });

        

        





    }
}
