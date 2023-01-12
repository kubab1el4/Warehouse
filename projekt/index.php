<?php
declare(strict_types=1);
include_once 'classes/autoloader.php';
?>
<?php $title = 'Product Page';
include_once("templates/top.php");
$form=new \projekt\classes\Form;
$form->createFormTop("POST", "Product List");
$form->addSubmitButton("add-product.php", "ADD");
$form->addSubmitButton("action/remove-product.php", "MASS DELETE");
$form->createFormMiddle();
$database = new \projekt\classes\Dbhandler();
$database->mySql();
$database->dbConnect();
$database->setTable('products');
$database->displayData();
$database->populate();
$database->dbDisconnect();
$form->addFormWindow();
include_once("templates/bottom.php");?>
