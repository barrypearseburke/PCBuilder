<?php
/**
 * Created by PhpStorm.
 * User: Barry
 * Date: 16/12/2015
 * Time: 00:36
 */


$message = "";
if ($this->model->bademailvar == true) {
    $message = '<div class="alert alert-danger">
	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	<strong>' . $this->model->errormessage . '</strong>
	</div>';


    echo $message;
}
?>
