<?php

namespace App\Providers;

use App\Models\ExpenseCategory;
use Illuminate\Support\Facades\View;
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
        View::share('personals',ExpenseCategory::where('category','personal')->get());
        View::share('companies',ExpenseCategory::where('category','company')->get());
    }
}
