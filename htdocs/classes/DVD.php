<?php
namespace projekt\classes;
class DVD extends Product
{
    public function createDisplayString($row)
    {
        include("templates/html_templates.php");
        $this->string=$dvd_string;
        return $this->string;
    }
}
