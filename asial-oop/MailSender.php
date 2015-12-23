<?php

interface IMailSender
{
    public function send($message);
}

class MailSender implements IMailSender
{
    public function send($message)
    {
        echo 'メールを送ります：'.$message;
    }
}

class DebugMailSender implements IMailSender
{
    public function send($message)
    {
        echo 'メールを送りません'.$message;
    }
}
