<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerSharedViewVariables();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(UrlGenerator $url): void
    {
        $url->forceScheme('https');
    }

    private function registerSharedViewVariables(): void
    {
        View::share('discordLink', 'https://discord.gg/hkF7BRvRZK');
        View::share('githubLink', 'https://github.com/nWidart/laravel-modules');
    }
}
