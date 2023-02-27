<?php

namespace NehalPatel\Chatbox\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use NehalPatel\Chatbox\Hello;
use NehalPatel\Chatbox\View\AppLayout;

class ChatboxServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('chatbox', function (){
            return new Hello;
        });
    }

    public function boot()
    {
        $this->loadAssets();
    }

    protected function base_path($path = '')
    {
        return __DIR__ . '/../../' . $path;
    }

    protected function loadAssets()
    {
        $this->loadRoutesFrom($this->base_path('routes/web.php'));

        Blade::component('chatbox::app-layout', AppLayout::class);
        $this->loadViewsFrom($this->base_path('resources/views'), 'chatbox');

    }
}