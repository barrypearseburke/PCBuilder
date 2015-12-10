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
}

public function destroy(){
    session_destroy();
}

}