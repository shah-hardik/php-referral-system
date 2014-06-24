<?php
$urlArgs = _cg("url_vars");



if (isset($_REQUEST['logout'])) {

    User::killSession();
    _R('login');
}

$clientdata = q("select * from client_registration");

if (isset($_REQUEST['logout'])) {

    User::killSession();
    _R('login');
}

$jsInclude = "adminpanel.js.php";
_cg("page_title", "Admin");
?>