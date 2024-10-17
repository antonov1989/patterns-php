<?php

namespace Patterns\Decorator\Classes;

use Patterns\Decorator\Interfaces\NotificationInterface;

class NotificationDecorator implements NotificationInterface {
    protected $component;

    public function __construct(NotificationInterface $component) {
        $this->component = $component;
    }

    // Декоратор делегує виконання методу компоненту
    public function send(): string {
        return $this->component->send();
    }
}