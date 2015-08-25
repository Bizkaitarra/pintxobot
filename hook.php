<?php

$loader = require __DIR__.'/vendor/autoload.php';

$API_KEY = '134756484:AAFXhc12rFLKWrnLDHCl-t1AU9d3-4oiOms';
$BOT_NAME = 'pintxobot';

try {
    // create Telegram API object    
    $telegram = new Longman\TelegramBot\Telegram($API_KEY,$BOT_NAME);
    // handle telegram webhook request
    $telegram->handle();    
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}