<?php

include_once 'init.php';
$_PROCESS = new Step\Process();
$_PROCESS
    ->Setting('Setting')->render()
    ->Product('Product\News')->render()
    ->Release('Release\HtmlResponse')->render()
;
include_once 'exit.php';