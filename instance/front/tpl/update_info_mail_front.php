<?php
ob_start();
$mail_content = "update_info_mail_content_front.php" ;
$mail_heading = "User Update Information from Client Side";
include "update_info_mail_general_format_front.php";
$mail = ob_get_contents();
ob_end_clean();
?>