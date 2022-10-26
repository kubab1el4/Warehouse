<?php
declare(strict_types=1);
include_once 'classes/autoloader.php';

$database=new \projekt\classes\Dbhandler();
$database->mySql();
$database->dbConnect();
$database->setTable('products');
?>
<?php $title = 'Add Product';
include_once("templates/top.php");?>
<form id="product_form" method='POST' autocomplete="off">
    <div class="header">
        <h1>Product List</h1>
        <div class="form_buttons">
            <button type="submit" formmethod="post" formaction="action/add-product.php">Save</button>
            <button onclick="window.location.href = 'index.php';">Cancel</button>
        </div>
        <hr>
    </div>
    <div class="main">
        <div class="first">
            <label for="SKU">SKU</label>
            <input type="text" id="SKU" oninput="this.value = this.value.toUpperCase()" required name="SKU"
                pattern="<?php print $database->createSKUPattern($database->getSKUArray()); ?>">
            <div class="checker" id="skucheck" style="color: red;"></div><br>
            <label for="Name">Name</label>
            <input type="text" id="Name" required name="Name">
            <div class="checker" id="namecheck" style="color: red;"></div><br>
            <label for="Price">Price ($)</label>
            <input type="text" id="Price" pattern="^[-+]?([0-9]+(\.[0-9]+)?|\.[0-9]+)$" required name="Price">
            <div class="checker" id="pricecheck" style="color: red;"></div><br>
            <label for="Type Switcher">Type Switcher</label>
            <select required id="productType">
                <option disabled selected value></option>
                <option value="DVD">DVD</option>
                <option value="Book">Book</option>
                <option value="Furniture">Furniture</option>
            </select>
            <div class="checker" id="productcheck" style="color: red;"></div><br>
            <div class="form_window" id="form_window"></div>
</form>
</div>
</div>
<?php include_once("templates/bottom.php");
?>