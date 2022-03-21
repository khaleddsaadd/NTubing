<?php
define('__ROOT__', "../app/");

require_once(__ROOT__ . "model/EventsModel.php");
require_once(__ROOT__ . "controller/EventsController.php");
require_once(__ROOT__ . "view/EventsView.php");
$model = new offers();
$controller=new offersController($model);
$v = new offerview($controller, $model);
echo $v->output();
?>