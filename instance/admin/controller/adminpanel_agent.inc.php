<?php
$urlArgs = _cg("url_vars");

$agentdata = q("select * from registration");

if (isset($_REQUEST['logout'])) {

    User::killSession();
    _R('login');
}

$jsInclude = "adminpanel.js.php";
_cg("page_title", "Admin");
?>