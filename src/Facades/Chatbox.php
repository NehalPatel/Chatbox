<?php

namespace NehalPatel\Chatbox\Facades;

use Illuminate\Support\Facades\Facade;

class Chatbox extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'chatbox';
    }

}