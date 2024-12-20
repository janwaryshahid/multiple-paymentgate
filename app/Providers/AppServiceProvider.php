<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Contracts\PaymentGatewayInterface;
use App\Services\StripePaymentService;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $apiKey = 1233423423423;
        $this->app->singleton(PaymentGatewayInterface::class, function ($app) use ($apiKey){
            return new StripePaymentService($apiKey);
        });
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
