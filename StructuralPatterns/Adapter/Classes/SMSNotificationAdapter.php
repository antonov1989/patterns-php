<?php

namespace Patterns\Adapter\Classes;

use Patterns\Adapter\Interfaces\NotificationInterface;
use Patterns\Adapter\Classes\SMS;

class SMSNotificationAdapter extends SMS implements NotificationInterface {
    protected $phone;
    
    public function __construct($phone)
    {
        $this->phone = $phone;
    }

    public function send()
    {
        return $this->differentSendMethod($this->phone);
    }
}