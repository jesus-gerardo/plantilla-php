<?php
define('SEPARATOR', PATH_SEPARATOR == '/' ? PATH_SEPARATOR : "/");

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

# initialize bootstrap functions
(include_once $_SERVER['DOCUMENT_ROOT'].SEPARATOR.'core'.SEPARATOR.'bootstrap'.SEPARATOR.'ini.php');
init();

require "./../core/controller/controller.base.php";
use Core\Controller\BaseController;

$a = new BaseController();
return $a->view('pagina');

?>