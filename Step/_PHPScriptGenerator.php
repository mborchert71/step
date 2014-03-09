<?php

/**
 * ScriptGenerator
 * ./{Step-Configuration}.json to ./{Step-Configuration}.php 
 */
$qs = $_SERVER["QUERY_STRING"];

if (!strlen($qs)) {
    die("?/Blog | ?/News");
}
if (!is_file($file = "..$qs.json")) {
    die("cannot read file $file");
}
if (is_file($file = "..$qs.php") && !array_key_exists("§", $_REQUEST)) {
    die("?/Blog | ?/News & §=true");
}
if (!$json = file_get_contents($file)) {
    die("cannot read file $file");
}
if (!$Sequence = json_decode($json)) {
    die("invalid json");
}

$php = "<?php\n";
$php.="include_once 'init.php';\n";
$php.="\$_PROCESS = new Step\Process();\n";
$php.="\$_PROCESS\n";
foreach ($Sequence as $_) {
    $php.=$_->Base . "('" . $_->Type . "')->render()\n";
}
$php.=";\n";
$php.="include_once 'exit.php';";

if (file_put_contents($file, $php)) {
    header("location:$file");
}
else {
    die("cannot save file: $file");
}
