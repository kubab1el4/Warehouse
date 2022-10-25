<?php
declare(strict_types=1);
include_once 'classes/autoloader.php';
?>
<?php $title = 'Product Page';
include_once("templates/top.php");?>
    <form id="product_form" method="POST">
        <div class="header">
            <h1>Product List</h1>
            <div class="form_buttons">

            <button type="submit" formmethod="post" formaction ="add-product.php">ADD</button>
                
                <button type="submit" formmethod="post" formaction ="action/remove-product.php">MASS DELETE</button>
            </div>
        
            <hr>
        </div>
        
        <div class="main">
        <div class="first">
        
            <?php $database = new \projekt\classes\Dbhandler();
$database->mySql();
$database->dbConnect();
$database->setTable('products');
$database->displayData();
$database->populate();
$database->dbDisconnect();

?>
             
</div>
 </div>
 <?php include_once("templates/bottom.php");?>
 