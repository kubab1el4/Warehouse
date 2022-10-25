<?php

namespace projekt\classes;

class Book extends Product
{
    public function createDisplayString($row)
    {
        include_once("templates/constants.php");
        include("templates/html_templates.php");
        $this->string=$book_string;
        return $this->string;
    }
}
