<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$user_id=$_SESSION['user'];

$registr_id =("select reg_id from client_registration where reg_id='{$ans}'"); 

$ans = q("select id from admin_users where user_name = '{$user_id}'");

//d($registr_id);

//d($user_id);

//d($ans);
$clientdata = q("select * from client_registration where reg_id ='{$ans}'");
$update_data = qs("select * from registration ");
//d($update_data);

$email=$_SESSION['user'];

$reg_id= qs("select * from registration where email= '{$email}' ");
//d($reg_id);
if (isset($_REQUEST['logout'])) {

    User::killSession();
    _R('home');
}

?>
