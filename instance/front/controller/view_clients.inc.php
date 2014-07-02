<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$user_id = $_SESSION['user'];

$regid = qs("select * from registration where email= '{$user_id}' ");

$update_data = qs("select * from registration ");

$reg_id = qs("select * from registration where email= '{$user_id}' ");

$email = $_SESSION['user'];


if (isset($_REQUEST['logout'])) {

    User::killSession();
    _R('home');
}
?>
