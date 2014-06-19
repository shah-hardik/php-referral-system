<?php
$urlArgs = _cg("url_vars");

$clientdata = q("select * from client_registration");


$jsInclude = "adminpanel.js.php";
_cg("page_title", "Admin");
?>