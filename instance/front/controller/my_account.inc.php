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

$getclientdata = qs("select * from client_registration where email = '{$_SESSION['useremail']}'");

$addclient = ($reg_id[id]);




$money= q("select earned_money from registration where email= '{$email}' ");
//d($money);

//d($money[0][earned_money]);
//d($money['earned_money']);



if (isset($_REQUEST['logout'])) {

    User::killSession();
    _R('home');
}
?>
