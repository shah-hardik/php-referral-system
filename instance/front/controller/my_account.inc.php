<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */
d($_SESSION['user']);
$update_data = qs("select * from registration ");
//d($update_data);

$email=$_SESSION['user'];

$reg_id= qs("select * from registration where email= '{$email}' ");
d($reg_id);
if (isset($_REQUEST['logout'])) {

    User::killSession();
    _R('home');
}
?>
