<?php

$loader = require __DIR__.'/vendor/autoload.php';

$API_KEY = '139576478:AAF2mBzEzSPIhxtUGkZMFatDn0IRMUjkILc';
$BOT_NAME = 'opedue';

try {
    // create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);    
    // set webhook
    //echo $telegram->setWebHook('https://opedue.appspot.com/');    
	echo $telegram->setWebHook('https://opedue.herokuapp.com/hook.php');    
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e->getMessage();
}
