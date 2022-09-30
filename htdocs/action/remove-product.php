<?php

declare(strict_types=1);
include '../classes/autoloader.php';
$database=new Dbhandler();
$database->mySql();
$database->dbConnect();
$database->setTable('products');
$database->getData();
$database->deletebyCheckbox($database->data);
$database->dbDisconnect();

header('Location: ../index.php');
