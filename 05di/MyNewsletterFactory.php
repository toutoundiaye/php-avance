<?php

namespace di;


class MyNewsletterFactory
{

    public function generate(Mailer $mailer)
    {
        $newsletter = new Newsletter();
        $newsletter->setMailer($mailer);
        $newsletter->setSubject('programmer en PHP pour les nuls');
        return $newsletter;
    }
}