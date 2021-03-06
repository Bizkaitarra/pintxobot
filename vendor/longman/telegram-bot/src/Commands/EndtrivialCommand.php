<?php

/*
 * This file is part of the TelegramBot package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Written by Marco Boretto <marco.bore@gmail.com>
*/

namespace Longman\TelegramBot\Commands;

use Longman\TelegramBot\Request;
use Longman\TelegramBot\Command;
use Longman\TelegramBot\Entities\Update;
use Longman\TelegramBot\Entities\ReplyKeyboardMarkup;
use Longman\TelegramBot\Entities\ReplyKeyboardHide;

class EndtrivialCommand extends Command
{
    protected $name = 'endtrivial';
    protected $description = 'Finaliza el trivial';
    protected $usage = '/endtrivial';
    protected $version = '1.0.0';
    protected $enabled = true;
    protected $public = true;

    public function execute()
    {
        
        $update = $this->getUpdate();
        $message = $this->getMessage();

        $chat_id = $message->getChat()->getId();
        
        $data = array();
        $data['chat_id'] = $chat_id;       
        $data['text'] = 'Test finalizado';        

        //Se crea un nuevo fichero de test        
        $file = $chat_id.'.txt';                        
        $puntero = fopen ($file, "w+");
        fclose($puntero);        
        
        $result = Request::sendMessage($data);
        return $result;
    }
}
