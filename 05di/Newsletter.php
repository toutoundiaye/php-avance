<?php

namespace di;


class Newsletter
{
    private $subject;
    private $mailer;

    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }

    public function publishCampaign()
    {
        echo $this->subject . "\n";
        $this->mailer->mail();
    }
}