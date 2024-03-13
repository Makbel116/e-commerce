<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

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
        //to prevent the error [Illuminate\Database\QueryException] SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes 
        Schema::defaultStringLength(191);

        // to handle the no space validation for item category input  

        Validator::extend('no_spaces', function ($attribute, $value, $parameters, $validator) {
            return !preg_match('/\s/', $value);
        });
        Validator::replacer('no_spaces', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'The :attribute field should not contain spaces.');
        });
    }
}
