<?php

/**
 * Admin User Dashboard File
 * 
 * 
 * @author Hardik Shah 
 * @version 1.0
 * @package Refferel
 * 
 */
$urlArgs = _cg("url_vars");
session_start();


if (isset($_REQUEST['message']) && ($_REQUEST['message'] == '') ){
    $regmessage = "You have been Registered, Please Login";
}
else
{
      $regmessage = "";
}


$_SESSION['user'] = $_REQUEST['email'];


if (isset($_REQUEST['sbt_btn'])) {

    if (($_REQUEST['email'] AND $_REQUEST['password'] ) == null) {
        $message = "Please Insert UserName AND Password";
    } else {
        $email = _escape($_REQUEST['email']);
        $password = _escape($_REQUEST['password']);

        $data = q("select email,password from registration where email = '$email'  AND password = '$password' ");


        
        
        
        if ($data != null) {
            _R(lr('my_account'));
        } else {

            $error = "Username Or Password is Wrong!!!";
        }
    }
}

_cg("page_title", "my_account");
?>
