<?php
ob_start();
$mail_content = "update_info_mail_content.php" ;
$mail_heading = "User Update Information";
include "update_info_mail_general_format.php";
$mail = ob_get_contents();
ob_end_clean();
?>