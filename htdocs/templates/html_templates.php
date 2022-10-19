<?PHP
$book_string=('<div class="product"><input class ="delete-checkbox" type="checkbox" id="product" name="product'.$row['SKU'].'" value="'.$row['ID'].'"><p>'.$row['SKU'].'<br>'.$row['Name'].'<br>'.$row['Price'].'$<br>Weight: '.$row['Weight'].'KG<br></p></div>');
$furniture_string=('<div class="product"><input class ="delete-checkbox" type="checkbox" id="product" name="product'.$row['SKU'].'" value="'.$row['ID'].'"><p>'.$row['SKU'].'<br>'.$row['Name'].'<br>'.$row['Price'].'$<br>Dimension: '.$row['Height'].'x'.$row['Width'].'x'.$row['Length'].'CM<br></p></div>');
$dvd_string=('<div class="product"><input class ="delete-checkbox" type="checkbox" id="product" name="product'.$row['SKU'].'" value="'.$row['ID'].'"><p>'.$row['SKU'].'<br>'.$row['Name'].'<br>'.$row['Price'].'$<br>Size: '.$row['Size'].'MB<br></p></div>');
$product_string=('<div class="product"><input class ="delete-checkbox" type="checkbox" id="product" required name="product'.$row['SKU'].'" value="'.$row['SKU'].'"><p>'.$row['SKU'].'<br>'.$row['Name'].'<br>'.$row['Price'].'</p></div>');
?>
