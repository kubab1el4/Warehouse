<?php

spl_autoload_register('myautoLoader');
function myautoLoader($classname)
{
    $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'action')!==false) {
        $path="../classes/";
    } else {
        $path="classes/";
    }
    $extension=".php";
    $fullpath=$path . $classname . $extension;
    include_once $fullpath;
}
