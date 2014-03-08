<?php
include_once('init.php');

if(!strlen($_SERVER["QUERY_STRING"]))die("?/Blog | ?/News");
if(is_file($file= ".".$_SERVER["QUERY_STRING"].".html")) header("location:$file");     //static
if(is_file($file= ".".$_SERVER["QUERY_STRING"].".php")) header("location:$file");      //dynamic
if(!is_file($file= ".".$_SERVER["QUERY_STRING"].".json")) die("cannot read file $file");//generic
if(!$json= file_get_contents($file)) die("cannot read file $file");
if(!$handle = json_decode($json)) die("invalid json");

$_HANDLE = new Step\Handle();

foreach($handle as $parameter){
    $_HANDLE->{$parameter->base}($parameter->type,$parameter)->render();
}

include_once('exit.php');
?>
