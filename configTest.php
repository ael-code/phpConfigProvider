<?php

//debug
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
//end debug


require 'configProvider.php';

$cfg = new ConfigProvider();
$cfg->printConfig();
echo "<br>";
echo $cfg->getCfg("conf1");
?>
