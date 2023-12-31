<?php
require_once __DIR__ . '/vendor/autoload.php';

use Bkbnf\BelajarPhpComposer\Data\People;

$people = new People("Addy");

echo $people->sayHello("Iwan Kurniawan") . PHP_EOL;
?>