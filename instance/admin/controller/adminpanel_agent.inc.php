<?php
$urlArgs = _cg("url_vars");

if($urlArgs[0] != '')
{
    $deletedata = qs("delete from registration where id = '{$urlArgs[0]}'");
  
      $error = "Agent Deleted Successfuly....";
      $_SESSION['deletemsg'] = $error;
       _R(lr('adminpanel_agent'));
  
  
}


$agentdata = q("select * from registration");

if (isset($_REQUEST['logout'])) {

    User::killSession();
    _R('login');
}

$jsInclude = "adminpanel.js.php";
_cg("page_title", "Admin");
?>