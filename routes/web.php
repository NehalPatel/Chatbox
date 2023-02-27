<?php

use Illuminate\Support\Facades\Route;
use NehalPatel\Chatbox\Http\ChatController;

Route::get('chatbox', [ChatController::class, 'index']);
