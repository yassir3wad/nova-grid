<?php

namespace Jobcerto\NovaGrid;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Fields\Field;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Field::macro('size', function ($size = 'w-full') {
            return $this->withMeta(['size' => $size]);
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
