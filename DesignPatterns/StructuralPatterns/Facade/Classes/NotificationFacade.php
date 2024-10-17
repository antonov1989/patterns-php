<?php

namespace Patterns\Facade\Classes;

class NotificationFacade
{
    protected $emailSender;

    protected $smsSender;

    /**
     * В зависимости от потребностей вашего приложения вы можете предоставить
     * Фасаду существующие объекты подсистемы или заставить Фасад создать их
     * самостоятельно.
     */
    public function __construct(
        EmailSender $emailSender = null,
        SmsSender $smsSender = null
    ) {
        $this->emailSender = $emailSender ?: new EmailSender();
        $this->smsSender = $smsSender ?: new SmsSender();
    }

    public function send()
    {
        echo 'Notification service!';

        echo $this->emailSender->send(); // "Email sender"

        echo $this->smsSender->send(); // "Sms sender"

    }
}