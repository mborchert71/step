<?php

include_once('init.php');

$qs = $_SERVER["QUERY_STRING"];

if (!strlen($qs)) {
    die("?/Blog | ?/News");
}
if (is_file($file = ".$qs.html")) {
    header("location:$file");
}
if (is_file($file = ".$qs.php")) {
    header("location:$file");
}
if (!is_file($file = ".$qs.json")) {
    die("cannot read file $file");
}
if (!$json = file_get_contents($file)) {
    die("cannot read file $file");
}
if (!$Sequence = json_decode($json)) {
    die("invalid json");
}

$_PROCESS = new Step\Process;

foreach ($Sequence as $_) {
    $_PROCESS->{$_->Base}($_->Type, $_)->render();
}

include_once('exit.php');
