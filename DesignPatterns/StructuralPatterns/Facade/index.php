<?php

/**
 * Facade - предоставляет простой интерфейс к сложной системе классов,
 * библиотеке или фреймворку.
 *
 * Фасад упрощает работу с библиотекой путем урезания ее функциональности и оставляет только необходимое.
 * Например в библиотеке фейсбук нужно только отправлять сообщения, все остальное не нужно.
 *
 * Удобно когда нужно использовать библиотеку в разных местах
 */

$emailSender = new \Patterns\Facade\Classes\EmailSender();
$smsSender = new \Patterns\Facade\Classes\SmsSender();
$facade = new \Patterns\Facade\Classes\NotificationFacade($emailSender, $smsSender);

$facade->send();
// Notification service!
// Email sender
// Method...