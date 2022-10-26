<?php

declare(strict_types=1);

namespace projekt\action;

include_once '../classes/autoloader.php';
$database=new \projekt\classes\Dbhandler();
$database->mySql();
$database->dbConnect();
$database->setTable('products');
$database->getData();
$database->addData($database->data);

$database->dbDisconnect();
if ($_SESSION["SKU"]!="wrong") {
    header('Location: ../index.php');
}
