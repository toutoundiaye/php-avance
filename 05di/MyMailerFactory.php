<?php 
namespace di;

class MyMailerFactory
{
    public static function create()
    {
        return new MyMailer('mail.dawan.fr');
    }
}