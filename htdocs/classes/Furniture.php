<?php
namespace projekt\classes;

class Furniture extends Product
{
    public function createDisplayString($row)
    {
        include("templates/html_templates.php");
        $this->string=$furniture_string;
        return $this->string;
    }
}
