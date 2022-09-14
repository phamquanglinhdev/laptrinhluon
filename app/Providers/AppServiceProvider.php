<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Grade;
use App\Models\Tag;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        try {
            $pin = Tag::where("pin", "=", 1)->first();
            $grade = $pin->Grade()->get();
            View::share("pin", $grade);
        } catch (\Exception $exception) {

        }
    }
}
