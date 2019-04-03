<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

use Saci\Escpos\Bematech\BematechPrinter;
use Saci\Escpos\PrintConnectors\NetworkPrintConnector;

include '../autoload.php';

try {

    $connector = new NetworkPrintConnector("10.0.0.23", 9100);
    $bematech = new BematechPrinter($connector);

    $bematech->openDrawer();

    $bematech->close();
} catch (Exception $e) {

    print $e->getMessage();
}


//$bematech->openDrawer();