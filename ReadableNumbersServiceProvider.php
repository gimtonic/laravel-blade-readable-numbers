<?php

namespace Gimtonic\ReadableNumbers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ReadableNumbersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('readable_int', function ($expression) {
            return sprintf('<?php echo \Gimtonic\ReadableNumbers\ReadableNumber::format(%s) ; ?>', $expression);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}