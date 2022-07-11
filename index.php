<?php

spl_autoload_register();

use MVC\Controllers\Controller;

$obj = new Controller('pages.html');
echo $obj->render();
