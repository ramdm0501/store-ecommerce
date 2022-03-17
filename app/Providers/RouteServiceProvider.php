<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    protected $namespace = 'App\Http\Controllers';



    public function boot()
    {
        parent::boot();
    }

    public function map()

    {


        $this->mapApiRoutes();


        $this->mapWebRoutes();




        $this->mapAdminRoutes();


        $this->mapSiteRoutes();

    }


    protected function mapWebRoutes()

    {

        Route::middleware('web')

            ->namespace($this->namespace)

            ->group(base_path('routes/web.php'));

    }


    /**

     * Define the "api" routes for the application.

     *

     * These routes are typically stateless.

     *

     * @return void

     */

    protected function mapApiRoutes()

    {

        Route::prefix('api')

            ->middleware('api')

            ->namespace($this->namespace)

            ->group(base_path('routes/api.php'));

    }


    /**

     * Define the "admin" routes for the application.

     *

     * These routes are typically stateless.

     *

     * @return void

     */

    protected function mapAdminRoutes()

    {

        Route::prefix('admin')

            ->namespace($this->namespace)

            ->group(base_path('routes/admin.php'));

    }


    /**

     * Define the "site" routes for the application.

     *

     * These routes are typically stateless.

     *

     * @return void

     */

    protected function mapSiteRoutes()

    {

        Route::prefix('site')

            ->namespace($this->namespace)

            ->group(base_path('routes/site.php'));

    }



}
