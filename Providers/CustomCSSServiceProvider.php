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
            dirname(__DIR__) . '/Resources/assets/sass/shop.css' => base_path('public/vendor/webkul/stripe/assets/css/stripe.css')
        ]);
    }
}