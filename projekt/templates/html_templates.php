<?php

namespace Projekt\Templates;

$book_string=(DIV.$row['SKU'].VALUESTRING.$row['ID'].CLOSEP.$row['SKU'].'<br>'.$row['Name'].'<br>'.$row['Price']
.'$<br>Weight: '.$row['Weight'].'KG<br></p></div>');
$furniture_string=(DIV.$row['SKU'].VALUESTRING.$row['ID'].CLOSEP.$row['SKU'].'<br>'.$row['Name'].'<br>'
.$row['Price'].'$<br>Dimension: '.$row['Height'].'x'.$row['Width'].'x'.$row['Length'].'CM<br></p></div>');
$dvd_string=(DIV.$row['SKU'].VALUESTRING.$row['ID'].CLOSEP.$row['SKU'].'<br>'
.$row['Name'].'<br>'.$row['Price'].'$<br>Size: '.$row['Size'].'MB<br></p></div>');
$product_string=(DIV.$row['SKU'].VALUESTRING
.$row['SKU'].CLOSEP.$row['SKU'].'<br>'.$row['Name'].'<br>'.$row['Price'].'</p></div>');

$furniture_html="<label for='Height'>Height(CM)</label><input type='text' pattern='^[-+]?([0-9]+(\.[0-9]+)?|\.[0-9]+)$'
id='Height'  required name='Height'>
<div class='checker' id='heightcheck' style='color: red;'></div><br><label for='Width'>Width(CM)</label>
<input type='text' pattern='^[-+]?([0-9]+(\.[0-9]+)?|\.[0-9]+)$'  id='Width'  required name='Width'>
<div class='checker' id='widthcheck' style='color: red;'></div><br><label for='Length'>
Length(CM)</label><input type='text' pattern='^[-+]?([0-9]+(\.[0-9]+)?|\.[0-9]+)$'
id='Length'  required name='Length'><div class='checker' id='lengthcheck' style='color: red;'></div><br>";
$book_html="<label for='Weight'>Weight(KG)</label><input type='text'
pattern='^[-+]?([0-9]+(\.[0-9]+)?|\.[0-9]+)$' id='Weight'
required name='Weight'><div class='checker' id='weightcheck' style='color: red;'></div><br>";

