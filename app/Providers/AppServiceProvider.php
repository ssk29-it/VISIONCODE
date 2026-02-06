<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Pesan;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
{

        View::composer('*', function ($view) {
        // Cek dulu apakah tabel pesan ada
        if (Schema::hasTable('pesan')) {
            $unreadMessages = Pesan::where('is_read', 0)->count();
            $view->with('unreadMessages', $unreadMessages);
        } else {
            $view->with('unreadMessages', 0);
        }
    });
}

}
