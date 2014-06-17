<?php

$auth_pages = array();
$auth_pages[] = "home";


if ($_REQUEST['logout']) {
    User::killSession();
}

_auth_url($auth_pages, "login");
?>