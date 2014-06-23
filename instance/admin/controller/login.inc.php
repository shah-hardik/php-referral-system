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
d($_REQUEST);
//die;
if (($_REQUEST['btn'])) {

    $user_name = _escape($_REQUEST['username']);
    $password = _escape($_REQUEST['password']);

    if (User::doLogin($user_name, $password)) {
        User::initUserSession($user_name);
        //_R(lr('home'));
        //_R(lr('adminpanel'));
        print "D";
    } else {
        $error = "Invalid Credentials";
        print "error" . $error;
    }
    $jsInclude = "login.js.php";
}
$no_visible_elements = true;


_cg("page_title", "Login");
?>