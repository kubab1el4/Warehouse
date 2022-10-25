<?php
declare(strict_types=1);
namespace projekt\classes;
include_once 'autoloader.php';
abstract class Product extends Dbhandler
{
    protected $string;
    protected $data;

    public function createDisplayString($row)
    {
        include("templates/html_templates.php");
        $this->string=$product_string;
        return $this->string;
    }
}
