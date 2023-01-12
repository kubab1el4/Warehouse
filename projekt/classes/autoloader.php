<?php

namespace projekt\classes;

spl_autoload_register('projekt\classes\myautoLoader');
function myautoLoader($className)
{
    $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'action')!==false) {
        $path="../";
    } else {
        $path="";
    }
    $extension=".php";
    $fullpath=$path . $className . $extension;
    $fullpaths=str_replace("\\", "/", $fullpath);
    $fullpathf=str_replace("projekt/", "", $fullpaths);
    include_once $fullpathf;
}
