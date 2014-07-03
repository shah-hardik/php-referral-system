<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$user_id = $_SESSION['user'];


session_start();


if (isset($_REQUEST['message']) && ($_REQUEST['message'] == '') ){
    $regmsg = "Client is Registered.";
}
else
{
      $regmsg = "";
}


$regid = qs("select * from registration where email= '{$user_id}' ");

$update_data = qs("select * from registration ");

$reg_id = qs("select * from registration where email= '{$user_id}' ");

$email = $_SESSION['user'];

 //$greetings = "Client is Registered.";

if (isset($_REQUEST['logout'])) {

    User::killSession();
    _R('home');
}
?>
