<?php

require '../vendor/autoload.php';

$core = new app\core\Core;
$core->run();

//echo 'controller ' . $core->getController();
//echo '<br>metodo ' . $core->getMethod() . '<br>';
//var_dump($core->getParams());