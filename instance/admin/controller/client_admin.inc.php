<?php
$urlArgs = _cg("url_vars");
$client_id = $urlArgs[0];
//d($_REQUEST);

if(isset($_REQUEST['comment']) && ($_REQUEST['comment'] != ''))
{
    qi('client_comment', array(
            'comment' => _escape($_REQUEST['comment']),
            'client_id' => _escape($client_id)
            
                ), 'REPLACE');
}
if(isset($_REQUEST['status']) && ($_REQUEST['status'] != ''))
{
    qu('client_registration', array(
                    'status' => _escape($_REQUEST['status'])
                        ), " id = '{$client_id}'");
}

$clientdata = qs("select * from client_registration where id = '{$urlArgs[0]}'");

$comment = q("select * from client_comment where client_id = '{$clientdata['id']}'");

if (isset($_REQUEST['logout'])) {

    User::killSession();
    _R(lr('login'));
}
$jsInclude = "client_admin.js.php";
_cg("page_title", "Client Admin");
?>