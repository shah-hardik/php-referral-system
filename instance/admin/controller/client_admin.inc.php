<?php
$urlArgs = _cg("url_vars");
$clientdata = qs("select * from client_registration where id = '{$urlArgs[0]}'");

$jsInclude = "client_admin.js.php";
_cg("page_title", "Client Admin");
?>