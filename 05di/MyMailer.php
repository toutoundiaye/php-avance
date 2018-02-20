<?php 
namespace di;

class MyMailer implements Mailer
{
    public function mail()
    {
        echo 'mail envoyé'."\n";
    }
}