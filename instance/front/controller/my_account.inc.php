<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */
$clientdata = q("select * from client_registration");
$update_data = qs("select * from registration ");

$email = $_SESSION['user'];

$reg_id = qs("select * from registration where email= '{$email}' ");

$addclient = ($reg_id[id]);

if (isset($_REQUEST['logout'])) {

    User::killSession();
    _R('home');
}
?>
