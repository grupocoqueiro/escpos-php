<?php
/**
 * Created by PhpStorm.
 * User: werllencosta
 * Date: 27/03/2019
 * Time: 14:56
 */

namespace Mike42\Escpos\Bematech\Status\Exceptions;


use Throwable;

class WithoutPapperInPrinterException extends \Exception implements StatusPrinterInvalidException
{

    public function __construct($message = 'Sem papel na impressora!', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}