<?php
/**
 * Created by PhpStorm.
 * User: werllencosta
 * Date: 27/03/2019
 * Time: 15:17
 */

namespace Mike42\Escpos\Bematech\Status\Exceptions;


use Throwable;

class UndefinedStatusException extends \Exception implements StatusPrinterInvalidException
{
    public function __construct($message = "Não foi possível capturar o estado da impressora", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}