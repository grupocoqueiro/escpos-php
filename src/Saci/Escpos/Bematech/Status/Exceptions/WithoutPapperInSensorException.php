<?php
/**
 * Created by PhpStorm.
 * User: werllencosta
 * Date: 27/03/2019
 * Time: 15:00
 */

namespace Saci\Escpos\Bematech\Status\Exceptions;


use Throwable;

class WithoutPapperInSensorException extends \Exception implements StatusPrinterInvalidException
{
   public function __construct($message = 'Sem Papel no sensor!', $code = 0, Throwable $previous = null)
   {
       parent::__construct($message, $code, $previous);
   }
}