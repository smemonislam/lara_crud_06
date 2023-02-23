<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\layouts\master;
use App\View\Components\partials\header;
use App\View\Components\partials\content;
use App\View\Components\table\table;
use App\View\Components\table\td;
use App\View\Components\Form\form;
use App\View\Components\Form\input;
use App\View\Components\Form\select;
use App\View\Components\Form\btn;
use App\View\Components\Form\label;

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
        Blade::component('master', master::class);
        Blade::component('header', header::class);
        Blade::component('content', content::class);
        Blade::component('table', table::class);
        Blade::component('td', td::class);
        Blade::component('form', form::class);
        Blade::component('input', input::class);
        Blade::component('select', select::class);
        Blade::component('btn', btn::class);
        Blade::component('label', label::class);
    }
}
