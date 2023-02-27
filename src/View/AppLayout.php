<?php

namespace NehalPatel\Chatbox\View;

use Illuminate\View\Component;

class AppLayout extends Component
{

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('chatbox::layouts.app');
    }
}