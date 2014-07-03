<?php

$urlArgs = _cg("url_vars");
// Add new Client

$email=$_SESSION['user'];

$reg_id= qs("select * from registration where email= '{$email}' ");

    $addclient_regid =($reg_id[id]);
       






$client_interes=$_REQUEST['client_interes'];
$client_interest = implode(",",$client_interes);
 

$area_comm=$_REQUEST['area_community'];
$area_communites = implode(",",$area_comm);
 
$additional_info=$_REQUEST['additional_info'];
$additional_information = implode(",",$additional_info);


if (isset($_REQUEST['sbt_btn'])) {
    qi('client_registration', array(
        'reg_id'  => _escape($addclient_regid),
        'salutation' => _escape($_REQUEST['salution']),
        'fname' => _escape($_REQUEST['fname']),
        'lname' => _escape($_REQUEST['lname']),
        'company' => _escape($_REQUEST['company']),
        'address' => _escape($_REQUEST['address']),
        'city' => _escape($_REQUEST['city']),
        'province' => _escape($_REQUEST['province']),
        'postal_code' => _escape($_REQUEST['postalcode']),
        'phone' => _escape($_REQUEST['phone']),
        'email' => _escape($_REQUEST['email']),
        'client_interes' => _escape($client_interest),
        'additional_information' => _escape($additional_information),
        'area_community' => _escape($area_communites)
        
            ), 'REPLACE');
    
     
     
    _R(lr('view_clients?message'));
    
    

    if (id > 0 ) {
        $greetings = "Client is Registered.";
    } else {
        $error = "Unable to add new Client";
    }
}
?> 

 