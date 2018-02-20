<?php 
namespace behavior\Observer;

require __DIR__.'/../../vendor/autoload.php';

$subject = new HttpMessaging();

$logger = new LoggerObserver();
$lorem = new LoremObserver();

$subject->attach($logger);
$subject->attach($lorem);

$subject->next();
$subject->next();
$subject->next();
$subject->next();