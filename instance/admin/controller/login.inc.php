<?php

/**
 * Admin side Login file
 * 
 * 
 * @author shah hardik 
 * @version 1.0
 * @package Referral
 * 
 */

session_start();
$_SESSION['user'] = $_REQUEST['username'];

if (isset($_REQUEST['btn'])) {
    
     if (($_REQUEST['username'] AND $_REQUEST['password'] ) == '') {
            $message = "Please Insert UserName AND Password";
        } else {
            $user_name = _escape($_REQUEST['username']);
            $password = _escape($_REQUEST['password']);

            $login = q("select * from admin_users where user_name = '{$user_name}' and password = '{$password}' ");

            if ($login != null) {
                _R(lr('adminpanel'));
            } else {

                $error = "Username Or Password is Wrong!!!";
            }
        }
}

_cg("page_title", "login");
?>