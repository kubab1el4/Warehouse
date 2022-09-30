<?php
declare(strict_types=1);
include 'classes/autoloader.php';
?>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
    </head>
    <body>
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
        
            <?php $database = new Dbhandler();
$database->mySql();
$database->dbConnect();
$database->setTable('products');
$database->displayData();
$database->populate();
$database->dbDisconnect();

?>
             
</div>
 </div>
    <div class="footer">
    <hr style="margin-top:0px;">
        <h3>Scandiweb test assignment</h3>
    </div>
    </form>
    </body>
</html>