<?php

class DVD extends Product
{
    public function createDisplayString($row)
    {
        $this->string=('<div class="product"><input class ="delete-checkbox" type="checkbox" id="product" name="product'.$row['SKU'].'" value="'.$row['ID'].'"><p>'.$row['SKU'].'<br>'.$row['Name'].'<br>'.$row['Price'].'$<br>Size: '.$row['Size'].'MB<br></p></div>');
        return $this->string;
    }
}
