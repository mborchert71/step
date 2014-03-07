<?php
include_once('init.php');

if(!isset($_GET["@"]))die("@{name}");
if(is_file($file= $_GET["@"].".html")) header("location:$file");     //static
if(is_file($file= $_GET["@"].".php")) header("location:$file");      //dynamic
if(!is_file($file= $_GET["@"].".json")) die("cannot read file $file");//abstract
if(!$json= file_get_contents($file)) die("cannot read file $file");
if(!$handle = json_decode($json)) die("invalid json");

$_HANDLE = new Step\Handle();

foreach($handle as $parameter){
    $_HANDLE->{$parameter->base}($parameter->type,$parameter)->render();
}

include_once('exit.php');
?>
