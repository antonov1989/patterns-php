<?php

namespace Patterns\Adapter\Classes;

class SMS {
    public function differentSendMethod(string $phone)
    {
        return 'SMS notification service: ' . $phone;
    }
}