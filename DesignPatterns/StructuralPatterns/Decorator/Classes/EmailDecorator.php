<?php

namespace Patterns\Decorator\Classes;

class EmailDecorator extends NotificationDecorator {
    public function send(): string {
        return "Email Decorator(" . parent::send() . ")";
    }
}