<?php
$urlArgs = _cg("url_vars");


if($urlArgs[0] != '')
{
   
    $deletedata = qs("delete from client_registration where id = '{$urlArgs[0]}'");
  if(!empty($deletedata))
  {
      $success = "Client Deleted Successfuly....";
      $_SESSION['deletemsg'] = $success;
      _R(lr('adminpanel'));
  }
  
}
 
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