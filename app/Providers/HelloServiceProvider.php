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
        $validator = $this->app['validator'];
        $validator->resolver(function($translator, $data, $rules, $messages) {
            return new PracticeValidator($translator, $data, $rules, $messages);
        });
    }
}
