<?php
/**
 * Created by PhpStorm.
 * User: werllencosta
 * Date: 27/03/2019
 * Time: 14:57
 */

namespace Mike42\Escpos\Bematech\Status\Exceptions;


use Throwable;

class LittlePapperException extends \Exception implements StatusPrinterInvalidException
{

    public function __construct($message = "Pouco papel na impressora!", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}