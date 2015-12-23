<?php

class Mail
{
    private $sender;

    public function setSender(IMailSender $sender)
    {
        $this->sender = $sender;
    }

    public function send($message)
    {
        $this->sender->send($message);
    }
}
