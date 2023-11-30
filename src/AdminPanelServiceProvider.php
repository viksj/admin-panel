<?php
namespace Himanshu\Adminpanel;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AdminPanelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'adminpanel');
    }

    public function register()
    {
        
    }
}