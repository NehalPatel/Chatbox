<?php

namespace NehalPatel\Chatbox\Http;

class ChatController
{
    public function index()
    {
        return view('chatbox::home');
    }
}