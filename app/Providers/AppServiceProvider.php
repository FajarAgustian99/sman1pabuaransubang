<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ContactSetting;
use App\Models\FooterSetting;
use App\Models\HeaderSetting;
use Illuminate\Support\Facades\View;


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
        try {
            View::share(
                'footerSetting',
                FooterSetting::first()
            );

            View::share(
                'contactSetting',
                ContactSetting::first()
            );
        } catch (\Throwable $e) {
            View::share('footerSetting', null);
            View::share('contactSetting', null);
        }

        View::composer('*', function ($view) {
            try {
                $view->with(
                    'headerSetting',
                    HeaderSetting::first()
                );
            } catch (\Throwable $e) {
                $view->with('headerSetting', null);
            }
        });
    }
}
