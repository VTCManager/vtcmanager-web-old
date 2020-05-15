<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
        $greetings = "";

    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");

    /* Set the $timezone variable to become the current timezone */
    $timezone = date("Europe/Berlin");

    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        $greetings = __("interface.greetings_gm");
    } else

    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if ($time >= "12" && $time < "17") {
        $greetings = __("interface.greetings_ga");
    } else

    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
    if ($time >= "17" && $time < "19") {
        $greetings = __("interface.greetings_ge");
    } else

    /* Finally, show good night if the time is greater than or equal to 1900 hours */
    if ($time >= "19") {
        $greetings = __("interface.greetings_gn");
    }
    View::share('geetings', $greetings);
    }
}
