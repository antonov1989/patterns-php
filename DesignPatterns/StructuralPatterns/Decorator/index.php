<?php

/**
 * Decorator — позволяет добавлять объектам новые поведения на лету, помещая их в объекты-обёртки.
 *
 * Элементы могут роботать
 */

use Patterns\Decorator\Classes\EmailDecorator;
use Patterns\Decorator\Classes\Notification;
use Patterns\Decorator\Classes\SmsDecorator;

$simple = new Notification();
echo "Client: I get a simple component:\n";
$simple->send();
// return: 'Default notification service!';

// Створюємо декоратори
$decorator1 = new EmailDecorator($simple);
$decorator2 = new SmsDecorator($decorator1);
echo "Client: Now I've got a decorated component:\n";
$decorator2->send();
// return: Sms Decorator(Email Decorator(Default notification service!))