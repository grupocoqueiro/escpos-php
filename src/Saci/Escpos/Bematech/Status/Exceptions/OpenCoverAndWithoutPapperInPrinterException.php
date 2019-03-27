<?php
/**
 * Created by PhpStorm.
 * User: werllencosta
 * Date: 27/03/2019
 * Time: 14:59
 */

namespace Saci\Escpos\Bematech\Status\Exceptions;


use Throwable;

class OpenCoverAndWithoutPapperInPrinterException extends \Exception implements StatusPrinterInvalidException
{

    public function __construct($message = 'Tampa da impressora aberta e sem papel na impressora!', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}