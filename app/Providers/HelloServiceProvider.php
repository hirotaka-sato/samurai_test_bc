<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Validator;
use App\Http\Validators\PracticeValidator;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('practice', function($attribute, $value, $parameters, $validator) {
            return $value % 2 == 0;
        });
    }
}
