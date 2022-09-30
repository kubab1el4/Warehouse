<?php

declare(strict_types=1);
include_once 'autoloader.php';
abstract class Product extends Dbhandler
{
    protected $string;
    protected $data;

    public function createDisplayString($row)
    {
        $this->string=('<div class="product"><input class ="delete-checkbox" type="checkbox" id="product" required name="product'.$row['SKU'].'" value="'.$row['SKU'].'"><p>'.$row['SKU'].'<br>'.$row['Name'].'<br>'.$row['Price'].'</p></div>');
        return $this->string;
    }
}
