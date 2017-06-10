<?php

namespace App\Providers;

use App\Models\Catalog\Category;
use App\Models\Catalog\Product;
use App\Models\Customer\ContactSource;
use App\Models\Customer\ContactType;
use App\Models\Customer\DealType;
use App\Models\Order\Order;
use App\Models\Order\Status;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        // TODO: singe names
        Route::model('users', Category::class);

        Route::model('categories', Category::class);
        Route::model('products', Product::class);

        Route::model('orders', Order::class);
        Route::model('orders_status', Status::class);

        Route::model('contact_source', ContactSource::class);
        Route::model('contact_type', ContactType::class);

        Route::model('deals_type', DealType::class);

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
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
}
