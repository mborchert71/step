<?php
/**
 * ScriptGenerator
 * takes as Step-Configuration.json and saves ../{name}.php 
 */
if(!isset($_GET["@"]))die("@{name}");
if(!is_file($conf= "../".$_GET["@"].".json")) die("cannot read file $conf");
if(is_file($file= "../".$_GET["@"].".php") && !isset($_GET["§"]))die("@{name}&§=true");
if(!$json= file_get_contents($conf)) die("cannot read file $conf");
if(!$build = json_decode($json)) die("invalid json");

$php ="<?php\n";
$php.="/**dochead**/\n";
$php.="include_once 'init.php';\n";
$php.="\$_HANDLE = new Step\Handle();\n";
$php.="\$_HANDLE\n";
foreach($build as $parameter){
$php.=$parameter->base."('".$parameter->type."')->render()\n";
}
$php.=";\n";
$php.="include_once 'exit.php';\n";
$php.="?>";

if(file_put_contents($file,$php))
    header("location:$file");
else die("cannot save file: $file");
?>
