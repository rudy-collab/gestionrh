<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\SmsServices;
class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
