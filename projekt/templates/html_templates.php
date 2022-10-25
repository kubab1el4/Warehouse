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
