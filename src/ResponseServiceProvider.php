<?php
/**
 * Created by PhpStorm.
 * User: sunlong
 * Date: 2019-02-08
 * Time: 19:14
 */

namespace Lostinyou\Response;

use Illuminate\Support\ServiceProvider;
use Lostinyou\Module\Commands\ControllerCommand;
use Lostinyou\Module\Commands\InitModuleCommand;
use Lostinyou\Module\Commands\InitRouteCommand;
use Lostinyou\Module\Commands\InitRouteServiceProviderCommand;
use Lostinyou\Module\Commands\ModelCommand;
use Lostinyou\Module\Commands\ModuleCommand;
use Lostinyou\Module\Commands\RouteCommand;
use Lostinyou\Module\Commands\TransformerCommand;

class ResponseServiceProvider extends ServiceProvider
{



    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }
}
