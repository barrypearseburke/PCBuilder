<?php
/**
 * @author Barry Burke and Eoin Irwin
 * @abstract setting up relationships between M-V-C components
 */
session_start();
include_once("models/model.php");
include("controllers/controller.php");
include("views/view.php");
include "conf/config.inc.php";

$action = "logout";

$model = new Model ();
$controller = new Controller ($model, $action);
$view = new View ($controller, $model);


// note: there is no need to echo the output (echos are within the template)

?>