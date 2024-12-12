<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
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
        Schema::defaultStringLength(191);
        Blade::withoutDoubleEncoding();

        if (Setting::count() > 0) {
            $settings = Setting::first();
        } else {
            $settings =  [
                "id" => "1",
                "website_name" => "Solas",
                "email" => "Solas-Society@outlook.com",
                "phone" => "+961 76 888 378",
                "address" => "Beirut, Lebanon",
                "meta_description" => "Spectrum of Light Autism Society (SOLAS) is a nonprofit organization based in Beirut, dedicated to supporting individuals with autism and their families. We provide specialized services, raise awareness, and promote inclusion, ensuring every autistic individual can achieve their full potential.",
                "meta_keywords" => "autism awareness, autism support, autistic individuals, Spectrum of Light, SOLAS, autism organization, Beirut autism support, autism services Lebanon, autism education, autism advocacy, family support autism, autism diagnosis, autism therapy, inclusive community, Spectrum of Light Autism Society",
                "logo" => "01JEC5TVKV0FMBT3B102W3HJBJ.png",
                "facebook_url" => "https://facebook.com/",
                "instagram_url" => "https://instagram.com/",
                "created_at" => "2024-12-05 19:34:08",
                "updated_at" => "2024-12-05 20:37:43"
            ];
        }
        View::share('settings', (object) $settings);
    }
}
