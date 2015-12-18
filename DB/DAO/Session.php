<?php

/**
 * Created by PhpStorm.
 * User: Barry
 * Date: 10/12/2015
 * Time: 15:16
 */
class Session
{
    public function login($username)
    {

        $_SESSION['username'] = $username;

        $_SESSION['login'] = '1'; // so to check if there is any user logged in
        header('Location: home.php');
    }

    public function addNameSession($fname)
    {

        $_SESSION['fname'] = $fname;

    }

    public function destroy()
    {
        session_destroy();
    }

}