<?php
declare(strict_types = 1);
include 'classes/autoloader.php';
$database=new Dbhandler;
session_start();
?>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Product</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
<script src="action/contentController.js" type="text/javascript"></script>
        
    </head>
    <body>
    <form  id="product_form" method='POST' autocomplete="off">
        <div class="header">
            <h1>Product List</h1>
            
            <div class="form_buttons">
                
                <button type="submit" formmethod="post" formaction ="action/add-product.php">Save</button>
                <button onclick="window.location.href = 'index.php';" >Cancel</button>
            </div>
        
            <hr>
        </div>
        <div class="main">
        <div class="first">
    <label for="SKU">SKU</label>
  <input type="text" id="SKU"  oninput="this.value = this.value.toUpperCase()" required name="SKU" pattern="[a-zA-Z][a-zA-Z][a-zA-Z][a-zA-Z][a-zA-Z][a-zA-Z][a-zA-Z]\d\d\d"><div class="checker" id="skucheck" style="color: red;">**Please, fill in the SKU.</div><br>
  <label for="Name">Name</label><?PHP $database->checkSKU(); ?>
  <input type="text" id="Name"  required name="Name"><div class="checker" id="namecheck" style="color: red;">**Please, fill in the name.</div><br>
  <label for="Price">Price ($)</label>
  <input type="text" id="Price" pattern="^[-+]?([0-9]+(\.[0-9]+)?|\.[0-9]+)$" required name="Price"><div class="checker" id="pricecheck" style="color: red;">**Please, fill in the price.</div><br>
  <label for="Type Switcher">Type Switcher</label>
  <input list="productTypeOptions" required id="productType"/><div class="checker" id="productcheck" style="color: red;">**Please, choose the product type.</div>
<datalist id="productTypeOptions">
  <option value="DVD" >DVD</option>
  <option value="Book" >Book</option>
  <option value="Furniture" >Furniture</option>
</datalist><br>


<div class="form_window" id="form_window"></div>
    </form>

</div>

        
     
    </div>
    <div class="footer">
    <hr style="margin-top:0px;">
        <h3>Scandiweb test assignment</h3>
    </div>
    </body>
</form>
</html>