<?php
/**
 * Created by PhpStorm.
 * User: werllencosta
 * Date: 27/03/2019
 * Time: 14:57
 */

namespace Saci\Escpos\Bematech\Status\Exceptions;


use Throwable;

class OpenCoverException extends \Exception implements StatusPrinterInvalidException
{

    public function __construct($message = 'Tampa da impressora aberta', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}