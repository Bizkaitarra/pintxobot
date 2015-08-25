<?php

$loader = require __DIR__.'/vendor/autoload.php';

$API_KEY = '134756484:AAFXhc12rFLKWrnLDHCl-t1AU9d3-4oiOms';
$BOT_NAME = 'pintxobot';

try {
    // create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);    
    // set webhook
    //echo $telegram->setWebHook('https://opedue.appspot.com/');    
	echo $telegram->setWebHook('https://pintxobot.herokuapp.com/hook.php');    
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e->getMessage();
}
