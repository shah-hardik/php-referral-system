<?php

$urlArgs = _cg("url_vars");
// Add new User



if (isset($_REQUEST['sbt_btn'])) {
    qi('registration', array(
        'username' => _escape($_REQUEST['username']),
        'password' => _escape($_REQUEST['password']),
        'conform_password' => _escape($_REQUEST['confirmpassword']),
        'salutation' => _escape($_REQUEST['salution']),
         'fname' => _escape($_REQUEST['fname']),
        'lname' => _escape($_REQUEST['lname']),
        'company' => _escape($_REQUEST['company']),
        'address' => _escape($_REQUEST['streetaddress']),
        'city' => _escape($_REQUEST['city']),
        'province' => _escape($_REQUEST['province']),
        'postal_code' => _escape($_REQUEST['postalcode']),
        'phone' => _escape($_REQUEST['primaryphone']),
        'email' => _escape($_REQUEST['email']),
        'about_program' => _escape($_REQUEST['about_program']),
        'like_update' => _escape($_REQUEST['like_update'])
        
            ), 'REPLACE');
    
    $date = date("m/d");
    
     $to = "whitedove549@gmail.com";
    $subject = "Registered User- {$_REQUEST['username']}  | -{$date} | ";
   
    
    
   include _PATH . "instance/{$instance}/tpl/mail_registration.php";
   
     _mail($to,$subject, $mail);

    
    
    _R(lr('home'));

    if ($id > 0) {
        $greetings = "New User Regestred successfully";
    } else {
        $error = "Unable to add new User";
    }
}
$jsInclude = "registration.js.php";
?> 