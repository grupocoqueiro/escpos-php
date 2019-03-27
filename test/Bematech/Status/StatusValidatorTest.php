<?php
/**
 * Created by PhpStorm.
 * User: werllencosta
 * Date: 27/03/2019
 * Time: 15:29
 */

namespace Test\Bematech\Status;

use Mike42\Escpos\Bematech\Status\Exceptions\LittlePapperException;
use Mike42\Escpos\Bematech\Status\Exceptions\OpenCoverAndWithoutPapperInPrinterException;
use Mike42\Escpos\Bematech\Status\Exceptions\OpenCoverAndWithoutPapperInSensorException;
use Mike42\Escpos\Bematech\Status\Exceptions\OpenCoverException;
use Mike42\Escpos\Bematech\Status\Exceptions\UndefinedStatusException;
use Mike42\Escpos\Bematech\Status\Exceptions\WithoutPapperInPrinterException;
use Mike42\Escpos\Bematech\Status\Exceptions\WithoutPapperInSensorException;
use Mike42\Escpos\Bematech\Status\StatusValidator;
use PHPUnit\Framework\TestCase;

class StatusValidatorTest extends TestCase
{
    public function provider()
    {
        return [
            [6, WithoutPapperInSensorException::class],
            [9, OpenCoverException::class],
            [14, OpenCoverAndWithoutPapperInSensorException::class],
            [17, LittlePapperException::class],
            [22, WithoutPapperInPrinterException::class],
            [30, OpenCoverAndWithoutPapperInPrinterException::class],
            [28, UndefinedStatusException::class],
        ];
    }


    /**
     * @test
     * @dataProvider provider
     * @param $statusCode
     * @param $exception
     */
    public function should_throw_exception($statusCode, $exception)
    {
        $this->setExpectedException($exception);

        StatusValidator::validate($statusCode);
    }
}
