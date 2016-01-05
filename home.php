<?php
/**
 * Created by PhpStorm.
 * User: Barry and Eoin
 * Date: 10/12/2015
 * Time: 23:23
 */

include_once ("models/model.php");
include ("controllers/controller.php");
include ("views/view.php");
include "conf/config.inc.php";
session_start();
$action = "displayparts";
if (! empty ( $_REQUEST ['action'] ))
    $action = $_REQUEST ['action'];

$model = new Model ();
$controller = new Controller ( $model, $action );
$controller->login_success();
$view= new View ( $controller, $model );
$page = "home_template.php";

// note: there is no need to echo the output (echos are within the template)
$view->getHTMLOutput ($page);
?>