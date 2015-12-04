<?php
/**
 * @author Luca
 * @abstract setting up relationships between M-V-C components
 */
include_once ("models/model.php");
include ("controllers/controller.php");
include ("views/view_login.php");
include "conf/config.inc.php";

$action = "";
if (! empty ( $_REQUEST ['action'] ))
	$action = $_REQUEST ['action'];

$model = new Model ();
$controller = new Controller ( $model, $action );
$view_login = new View_login ( $controller, $model );

// note: there is no need to echo the output (echos are within the template)
$view_login->getHTMLOutput ();
?>