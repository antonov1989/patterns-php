<?php

namespace Patterns\Decorator\Classes;

use Patterns\Decorator\Interfaces\NotificationInterface;

class Notification implements NotificationInterface
{
    public function send()
    {
        return 'Default notification service!';
    }
}