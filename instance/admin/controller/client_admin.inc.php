<?php
$urlArgs = _cg("url_vars");

//d($_REQUEST['update_info']);

if ($_REQUEST['update_info'] == '')
{
    qi('client_comment', array(
            'comment' => _escape($_REQUEST['comment']),
            'client_id' => _escape()
            
                ), 'REPLACE');
    
    qu('client_registration', array(
                    'status' => _escape($answer)
                        ), " id = '{$data['id']}'");
}

$clientdata = qs("select * from client_registration where id = '{$urlArgs[0]}'");

$jsInclude = "client_admin.js.php";
_cg("page_title", "Client Admin");
?>