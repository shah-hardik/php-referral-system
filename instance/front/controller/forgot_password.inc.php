<?php

$urlArgs = _cg("url_vars");

if (isset($_REQUEST['sendpass'])) {

 $subject = "Remember Password";
$to = $_REQUEST['email'];
$pass = qs("select password from registration where email='{$to}'");
$mail = $pass['password'];

_mail($to, $subject, $mail);
  _R(lr('confirm_pass'));
}

_cg("page_title", "Forgot Password");
?> 