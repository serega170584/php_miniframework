<?php
declare(strict_types=1);

use Services\Mail1;
use Services\Mail2;
use Services\MailDefiner;
use Services\MailDefineStrategy;
use Services\Sender;
use Services\Source;

require_once '../autoload.php';
//require_once __DIR__ . '/../Application/Application.php';

$mail1 = new Mail1();
$mail2 = new Mail2();
$source = new Source();
$strategy = new MailDefineStrategy();
$mailDefiner = new MailDefiner($source, $strategy);
$sender = new Sender($mail1, $mail2, $mailDefiner, $source);
for ($i = 0; $i < 15; ++$i) {
    $sender->send();
}



