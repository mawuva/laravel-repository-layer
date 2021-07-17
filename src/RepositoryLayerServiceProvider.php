<?php

namespace Mawuekom\RepositoryLayer;

use Illuminate\Support\ServiceProvider;

class RepositoryLayerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                base_path('vendor/spatie/laravel-query-builder/config/query-builder.php') =>config_path('query-builder.php'),
                base_path('vendor/spatie/laravel-json-api-paginate/config/json-api-paginate.php') =>config_path('json-api-paginate.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this ->app ->register('Mawuekom\LaravelSearchable\LaravelSearchableServiceProvider');
        $this ->app ->register('Spatie\QueryBuilder\QueryBuilderServiceProvider');
        $this ->app ->register('Spatie\JsonApiPaginate\JsonApiPaginateServiceProvider');
    }
}
