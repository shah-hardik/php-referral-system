<?php

include _PATH . "instance/{$instance}/tpl/message.php";



$urlArgs = _cg("url_vars");

$client_id = $urlArgs[0];

//d($_REQUEST);



$agentdata = qs("select * from registration where id = '{$urlArgs[0]}'");
//d($agentdata);


$comment = q("select * from client_comment where client_id = '{$agentdata['id']}'");


if (isset($_REQUEST['logout'])) {

    User::killSession();
    _R(lr('login'));
}

_cg("page_title", "View Agent");
?>