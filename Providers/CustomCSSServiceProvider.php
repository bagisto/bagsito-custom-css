<?php

namespace Webkul\CustomCSS\Providers;

use Illuminate\Support\ServiceProvider;

class CustomCSSServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../publishable/assets/saas' => public_path('themes/default/assets/css'),
        ], 'public');
    }
}