<?php
declare(strict_types=1);
include_once 'classes/autoloader.php';

$database=new \projekt\classes\Dbhandler();
session_start();
?>
<?php $title = 'Add Product';
include_once("templates/top.php");?>
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
  <input type="text" id="SKU"  oninput="this.value = this.value.toUpperCase()" required name="SKU">
  <div class="checker" id="skucheck" style="color: red;">**Please, fill in the SKU.</div><br>
  <label for="Name">Name</label><?php $database->checkSKU(); ?>
  <input type="text" id="Name"  required name="Name">
  <div class="checker" id="namecheck" style="color: red;">**Please, fill in the name.</div><br>
  <label for="Price">Price ($)</label>
  <input type="text" id="Price" pattern="^[-+]?([0-9]+(\.[0-9]+)?|\.[0-9]+)$" required name="Price">
  <div class="checker" id="pricecheck" style="color: red;">**Please, fill in the price.</div><br>
  <label for="Type Switcher">Type Switcher</label>
  <select required id="productType"><div class="checker" id="productcheck" style="color: red;">
  **Please, choose the product type.</div>
  <option disabled selected value></option>
  <option value="DVD" >DVD</option>
  <option value="Book" >Book</option>
  <option value="Furniture" >Furniture</option>
</select><br>


<div class="form_window" id="form_window"></div>
    </form>

</div>

        
     
    </div>
    <?php include_once("templates/bottom.php");
    ?>
