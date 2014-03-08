<?php

define("DEBUG", (array_key_exists("debug",$_REQUEST)) ? true : false );

if(DEBUG){
    error_reporting(null);
}

function __autoload($class) {
    include_once str_replace("\\", "/", $class) . ".php";
}

Step\Process::$Root = __DIR__;
