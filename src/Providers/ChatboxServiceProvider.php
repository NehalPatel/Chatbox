<?php

namespace NehalPatel\Chatbox\Providers;

use Illuminate\Support\ServiceProvider;

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

    }

    protected function base_path($path = '')
    {
        return __DIR__ . '/../../' . $path;
    }
}