<?php

declare(strict_types=1);
include '../classes/autoloader.php';
$database=new Dbhandler();
$database->mySql();
$database->dbConnect();
$database->setTable('products');
$database->validateSKU();
$database->getData();
$database->addData($database->data);

$database->dbDisconnect();
header('Location: ../index.php');
