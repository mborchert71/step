<?php
/**
 * Initialize the Step-Framework
 */
define( "_debug_" , (isset($_REQUEST["debug"])) ? true : false );

function __autoload($class){
    include_once str_replace("\\","/",$class).".php";
}

Step\Handle::$Root = __DIR__;

?>
