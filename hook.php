<?php

$loader = require __DIR__.'/vendor/autoload.php';

$API_KEY = '139576478:AAF2mBzEzSPIhxtUGkZMFatDn0IRMUjkILc';
$BOT_NAME = 'opedue';

try {
    // create Telegram API object    
    $telegram = new Longman\TelegramBot\Telegram($API_KEY,$BOT_NAME);
    // handle telegram webhook request
    $telegram->handle();    
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}