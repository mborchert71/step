<?php
/**dochead**/
include_once 'init.php';
$_HANDLE = new Step\Handle();
$_HANDLE
->Setting('Setting')->render()
->Product('Product\News')->render()
->Release('Release\HtmlResponse')->render()
;
include_once 'exit.php';
?>