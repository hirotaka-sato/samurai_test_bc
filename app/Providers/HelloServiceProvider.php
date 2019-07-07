<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer(
            'practice.index', 'App\Http\Composers\HelloComposer'
        );
    }
}
