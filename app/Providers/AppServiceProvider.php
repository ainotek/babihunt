<?php

namespace App\Providers;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
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
        view()->composer(['layouts.topbar', 'layouts.sidebar', 'layouts.rightbar'],
            function ($views){
                $admin = Admin::with('role')->where('id', Auth::user()->id)->first();
                $views->with('admin', $admin);
            }
            );
    }
}
