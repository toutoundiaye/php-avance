<?php 
namespace di;

require __DIR__.'/../vendor/autoload.php';

$container = new ServiceContainer();
$mailer = $container->get('mailer');
$mailer->mail();
$newsletter = $container->get('newsletter');

$newsletter->publishCampaign();