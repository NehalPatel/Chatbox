<?php

use Illuminate\Support\Facades\Route;

Route::get('chatbox', [NehalPatel\Chatbox\Http\ChatController::class, 'index']);
