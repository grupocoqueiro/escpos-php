<?php
/**
 * Created by PhpStorm.
 * User: werllencosta
 * Date: 27/03/2019
 * Time: 13:04
 */

namespace Saci\Escpos\Bematech\Status;


use Saci\Escpos\Bematech\Status\Exceptions\LittlePapperException;
use Saci\Escpos\Bematech\Status\Exceptions\OpenCoverAndWithoutPapperInPrinterException;
use Saci\Escpos\Bematech\Status\Exceptions\OpenCoverAndWithoutPapperInSensorException;
use Saci\Escpos\Bematech\Status\Exceptions\OpenCoverException;
use Saci\Escpos\Bematech\Status\Exceptions\UndefinedStatusException;
use Saci\Escpos\Bematech\Status\Exceptions\WithoutPapperInPrinterException;
use Saci\Escpos\Bematech\Status\Exceptions\WithoutPapperInSensorException;

class StatusValidator
{
    const SUCCESS = 1;
    const WITHOUT_PAPPER_IN_SENSOR = 6;
    const OPEN_COVER = 9;
    const OPEN_COVER_AND_WITHOUT_PAPPER_IN_SENSOR = 14;
    const LITTLE_PAPPER = 17;
    const WITHOUT_PAPPER_IN_PRINTER = 22;
    const OPEN_COVER_AND_WITHOUT_PAPPER_IN_PRINTER = 30;


    public static function validate(int $statusCodeF)
    {
        switch ($statusCodeF){
            case self::WITHOUT_PAPPER_IN_PRINTER:
                    throw new WithoutPapperInPrinterException();
                break;
            case self::OPEN_COVER:
                    throw new OpenCoverException();
                break;
            case self::LITTLE_PAPPER:
                throw new LittlePapperException();
                break;
            case self::OPEN_COVER_AND_WITHOUT_PAPPER_IN_SENSOR:
                throw new OpenCoverAndWithoutPapperInSensorException();
                break;
            case self::WITHOUT_PAPPER_IN_SENSOR:
                throw new WithoutPapperInSensorException();
                break;
            case self::OPEN_COVER_AND_WITHOUT_PAPPER_IN_PRINTER:
                throw new OpenCoverAndWithoutPapperInPrinterException();
                break;
            case self::SUCCESS:
                break;
            default:
                throw new UndefinedStatusException();
                break;

        }
    }
}