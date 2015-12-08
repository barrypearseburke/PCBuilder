<?php
/**
 * Created by PhpStorm.
 * User: Barry
 * Date: 08/12/2015
 * Time: 17:36
 */
//when on a restricted page , call fxn.

Class login_success{
    //this will check if the user is logged into the system.

    public function login(){

        if($_SESSION['login']!='1')// This fxn checks to see if the user is logged in on the page
        {
            header("location:index.php"); // will redirect to homepage if user is not logged in.

        }
    }

}