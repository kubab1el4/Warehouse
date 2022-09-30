<?php

class Furniture extends Product
{
    public function createDisplayString($row)
    {
        $this->string=('<div class="product"><input class ="delete-checkbox" type="checkbox" id="product" name="product'.$row['SKU'].'" value="'.$row['ID'].'"><p>'.$row['SKU'].'<br>'.$row['Name'].'<br>'.$row['Price'].'$<br>Dimension: '.$row['Height'].'x'.$row['Width'].'x'.$row['Length'].'CM<br></p></div>');
        return $this->string;
    }
}
