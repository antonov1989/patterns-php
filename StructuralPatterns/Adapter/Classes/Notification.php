<?php

namespace Patterns\Adapter\Classes;

use Patterns\Adapter\Interfaces\NotificationInterface;

class Notification implements NotificationInterface {
    public function send()
    {
        return 'Default notification service!';
    }
}