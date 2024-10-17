<?php

namespace Patterns\Decorator\Classes;

class SmsDecorator extends NotificationDecorator {
    public function send(): string {
        return "Sms Decorator(" . parent::send() . ")";
    }
}