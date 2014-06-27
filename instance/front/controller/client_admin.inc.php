<?php

$urlArgs = _cg("url_vars");
$client_id = $urlArgs[0];

if (isset($_REQUEST['comment']) && ($_REQUEST['comment'] != '')) {
    qi('client_comment', array(
        'comment' => _escape($_REQUEST['comment']),
        'client_id' => _escape($client_id)
            ), 'REPLACE');
    $greetings = " Success!!! Notes inserted successfuly...";
    // $_SESSION['greetings_msg'] = $greetings;
}



$clientdata = qs("select * from client_registration where id = '{$urlArgs[0]}'");

$comment = q("select * from client_comment where client_id = '{$clientdata['id']}'");

$update_data = qs("select * from registration ");
//d($update_data);

$email = $_SESSION['user'];

$reg_id = qs("select * from registration where email= '{$email}' ");

if (isset($_REQUEST['sbt_btn'])) {
    $date = date("m/d");

    $to = "whitedove549@gmail.com";
    $subject = "User Update Information From Client Side - {$_REQUEST['username']}  | {$date} | ";



    include _PATH . "instance/{$instance}/tpl/update_info_mail_front.php";

    _mail($to, $subject, $mail);
}






if (isset($_REQUEST['logout'])) {

    User::killSession();
    _R(lr('home'));
}
$jsInclude = "client_admin.js.php";
_cg("page_title", "Client Admin");
?>