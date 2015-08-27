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
use Longman\TelegramBot\Test;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Command;
use Longman\TelegramBot\Entities\Update;
use Longman\TelegramBot\Entities\ReplyKeyboardMarkup;
use Longman\TelegramBot\Entities\ReplyKeyboardHide;

class TrivialCommand extends Command
{
    protected $name = 'trivial';
    protected $description = 'Comienza el trivial';
    protected $usage = '/trivial <expression>';
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
        $miTest = new Test();
        $data['text'] = 'Comenzando el trivial...';
        
        $temaElegido = $message->getText(true);
        
        
        //Comprobar si existe el tema solicitado.
        if ($miTest->existeTema($temaElegido)) {
            //Se obtiene la primera de las preguntas.
            $data['text'] .= "\n" ."Buscando pregunta...";
            $preguntaMostrar = $miTest->obtenerPreguntaAleatoria($temaElegido);
            if (!is_null($preguntaMostrar)) {  
                $data['text'] .= "\n" ."Pregunta encontrada, se muestra y se guarda el fichero...";
                $data['text'] .= "\n" .$preguntaMostrar['pregunta'];            
                //Se crea un nuevo fichero de test
                $miTest->crearFicheroTest($chat_id, "respuestacorrecta=".$preguntaMostrar['s'].";temaElegido=".$temaElegido);
                $data['text'] .= "\n" ."Fichero creado, se debería de haber mostrado la pregunta...";
                $data['text'] .= "\n" ."Contenido del fichero: respuestacorrecta=".$preguntaMostrar['s'].";temaElegido=".$temaElegido;
                $contenido = $miTest->obtenerContenidoFichero($chat_id);
                $data['text'] .= "\n" ."Y el contenido real es: " . $contenido;
            } else {
                $data['text'] .= "\n" .'Ha ocurrido un error obteniendo las preguntas, seleccione otro tema.';  
            }       
        } else {
            //No existe el tema, mostrar los temas disponibles e indicar que se debe
            //elegir uno de los temas.
            $temas = $miTest->obtenerTemas();
            $data['text'] .= "\n" ."El tema indicado no esta disponible. Debe elegir uno de los siguientes:";
            foreach ($temas as $temaAct) {
                $data['text'] .= "\n" .$temaAct;
            }
        }
        $result = Request::sendMessage($data);
        
        return $result;
    }
}
