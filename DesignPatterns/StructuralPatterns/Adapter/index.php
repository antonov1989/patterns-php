<?php

/**
 * Adapter — позволяет объектам с несовместимыми интерфейсами работать вместе.
 * Обертка
 * SMSNotificationAdapter это обертка которая позволяет коду работать без изменений,
 * а все изменения в адаптере
 */

use Patterns\Adapter\Interfaces\NotificationInterface;
use Patterns\Adapter\Classes\Notification;
use Patterns\Adapter\Classes\SMSNotificationAdapter;

function clientCode(NotificationInterface $notification)
{
    echo $notification->send();
}

$notification = new Notification();
clientCode($notification);
// Default notification service!

$notification = new SMSNotificationAdapter('0993434333');
clientCode($notification);
// SMS notification service: 0993434333

