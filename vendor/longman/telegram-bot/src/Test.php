<?php

/*
 * This file is part of the TelegramBot package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/
namespace Longman\TelegramBot;

define('BASE_PATH', dirname(__FILE__));

use Longman\TelegramBot\Entities\Update;
use Longman\TelegramBot\Exception\TelegramException;

/**
 * @package         Telegram
 * @author          Avtandil Kikabidze <bizkaitarra@gmail.com>
 * @copyright       Avtandil Kikabidze <bizkaitarra@gmail.com>
 * @license         http://opensource.org/licenses/mit-license.php  The MIT License (MIT)
 */
class Test
{



    /**
     * Constructor
     *     
     */
    public function __construct()
    {
       
    }
    
    public function realizarAccionesTest($message) {
        
        /*
         * Explicación progración:
         * En un fichero con el id del chat se guardan pares de variables con la siguiente estructura:
         * variable1=valor1;variable2=valor2
         * Se cargan en un array $estado de tal manera que:
         * $estado[variable1] = valor1
         * En estado se guardan los siguientes tipos de varibles:
         *      - p_idusuario : Guarda la puntuación del idusuario.
         *      - n_idusuario : Guarda el nombre del idusuario.
         *      - respuestacorrecta: Guarda la respuesta correcta de la pregunta en curso.
         */
        
        $chat_id = $message->getChat()->getId();
        //Nombre del fichero que guarda el estado del trivial.
        $file = $chat_id . ".txt";
        if ($this->esTest($chat_id)) {
            //Estamos en modo test, hay que leer el estado actual.
            $estado = array();
            $puntuaciones = array();
            if (file_exists($file)) {
                //Se obtiene el contenido, el estado actual.
                $current = file_get_contents($file);
                $arrValores = explode(";",$current);

                foreach ($arrValores as $variablevalor) {
                    $arrVariableAct = explode("=",$variablevalor);
                    $estado[$arrVariableAct[0]] = $arrVariableAct[1];
                    if (strpos('p_', $arrVariableAct[0]) > 0) {
                        //Es una variable de puntuacion
                        $puntuaciones[$arrVariableAct[0]] = $arrVariableAct[1];
                    }
                }
            }
            
            if (isset($estado['respuestacorrecta'])) {
                $respuestacorrecta = $estado['respuestacorrecta'];
            } else {
                $respuestacorrecta = '';
            }
                        
            
            $data = array();
            $data['chat_id'] = $chat_id;  
            
            
            
            
            //Comprobar si la respueta es correcta
            if (strtoupper($respuestacorrecta) == strtoupper($message->getText())) {
                //Hay que comprobar quien ha sido el que ha acertado para sumar sus puntos.
                $message_id = $message->getMessageId();
                $data['reply_to_message_id'] = $message_id;
                $data['text'] = '¡Correcto! Punto para ' . $message->getFrom()->getFirstName();
                //Suma de puntos
                $idUsuarioAcierto = $message->getFrom()->getId();
                if (!isset($estado['p_'.$idUsuarioAcierto])) {
                    $estado['p_'.$idUsuarioAcierto] = 0;
                }
                $estado['p_'.$idUsuarioAcierto]++;
                $puntuaciones[$arrVariableAct[0]] = $arrVariableAct[1];
                
                //Para poder traducir los ids de usuario a los nombres hay que guardarlos en estado.
                //Se va guardando cada id-nombre de cada usuario según acierta preguntas.
                $estado['n_'.$idUsuarioAcierto] = $message->getFrom()->getFirstName();
                
                
                //Se deben mostrar todos los puntos ordenados por mayor puntuación.
                //Se ordenan las puntuaciones de mayor a menor                
                arsort($puntuaciones);
                $data['text'] .= "\n" .'Puntuaciones:';
                foreach ($puntuaciones as $usuario=>$puntuacion) {
                    $arrUsuario = explode("_",$usuario);
                    $idusuario = $arrUsuario[0];
                    $nombreUsuario = $estado['n_'.$idusuario];                    
                    $data['text'] .= "\n" .$nombreUsuario.':'.$puntuacion;
                }
                $data['text'] .= "\n" .'Resto de participantes sin puntos.';
                
                //Como esta ya se ha acertado, hay que obtener una pregunta aleatoria  
                
                if (!isset($estado['temaElegido'])) {
                    $data['text'] .= "\n" .'Ha ocurrido un problema al obtener la siguiente pregunta por que se ha perdido el tema seleccionado... se suspende el trivial actual.';
                    return $data;
                }
                
                $preguntaMostrar = $this->obtenerPreguntaAleatoria($estado['temaElegido']);
                if (!is_null($preguntaMostrar)) {
                    $data['text'] .= "\n" ."\n" ."\n" ."\n";
                    $data['text'] .= "\n" .$preguntaMostrar['pregunta'];
                    $estado['respuestacorrecta'] =  $preguntaMostrar['s'];
                    $estadotxt = '';
                    
                    //Se pone el array estado en el fichero de situación del trivial para este chatid
                    foreach($estado as $variable => $valor) {
                        if ($estadotxt != '') {
                            $estadotxt .=";";
                        }
                        $estadotxt .=$variable."=".$valor;
                    }
                    file_put_contents($file, $estadotxt);
                } else {
                    $data['text'] .= "\n" .'No se puede acceder a las preguntas para pregunta la siguiente.';  
                }
                return $data;
                } else {
                    //No es correcto, no se responde nada y se sigue con la pregunta actual     
                    return null;
                }                                    
        } else {
            //No estamos en modo test.
            return  null;
        }
        
    }
    
    public function obtenerPreguntaAleatoria($tema) {
        $nombreFichero = BASE_PATH.'/'.$tema.'txt';
        if (file_exists($nombreFichero)) {
            
            $preguntas = array();
            $file = fopen($nombreFichero, "r");
            //Output a line of the file until the end is reached
            while(!feof($file))
            {
                $preguntas[] = utf8_encode(fgets($file));
            }
            fclose($file);                        
            $preguntaNumero = rand(0, count($preguntas)-1);      
            $preguntaMostrar = array();            
            $separador1 = '©-«';
            $preguntaArr1 = explode($separador1,$preguntas[$preguntaNumero]);
            if (count($preguntaArr1)!=2) {
                $preguntaMostrar['pregunta'] = 'Error 1';
                $preguntaMostrar['s'] = 'ok';       
                return $preguntaMostrar;
                //return null;
            }
            $separador2 = '*';
            $preguntaArr2 = explode($separador2,$preguntaArr1[1]);
            if (count($preguntaArr2)!=2) {
                $preguntaMostrar['pregunta'] = 'Error 2';
                $preguntaMostrar['s'] = 'ok';       
                //return null;
            }
            $preguntaMostrar['pregunta'] = $preguntaArr2[0];
            $preguntaMostrar['s'] = $preguntaArr2[1];            
            return $preguntaMostrar;
        } else {
            $preguntaMostrar['pregunta'] = 'Error 3';
                $preguntaMostrar['s'] = 'ok';  
            return $preguntaMostrar;
        }
    }
    
    public function esTest($idChat) {
        if (file_exists($idChat.".txt")) {
            return (filesize($idChat.".txt") > 0);
        } else {
            return false;
        }
    }

    /**
     * Devuelve los temas sobre los que se puede preguntar
     * Corresponden a los ficheros que se encuentran en el directorio de preguntas
     * @return type array
     */
    public function obtenerTemas() {
        
        $temas = array();
        
        if ($handle = opendir(BASE_PATH)) {
            while (false !== ($file = readdir($handle)))
            {
                if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'txt')
                {
                    //Comprobar si es un txt de estado. Si lo es su parte de nombre sería numérica.
                    $arrFichero = explode(".", $file);
                    if (!is_numeric($arrFichero[0])) {
                        $temas[] .= $arrFichero[0];
                    }
                }
            }
            closedir($handle);
        } 
        
        return $temas;
        
    }

    public function existeTema($tema) {
        return file_exists(BASE_PATH."/".$tema.".txt");
    }
    
}
