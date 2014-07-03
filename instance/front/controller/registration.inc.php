<?php

$urlArgs = _cg("url_vars");

// Check new User

if ($_REQUEST['usernamecheck'] != '') {
    $response = array();
    $username = $_REQUEST['usernamecheck'];
    $usercheck = qs("select * from registration where username = '{$username}'");

    if ($usercheck != '') {
        $response['msg'] = '1';
    } else {
        $response['msg'] = '2';
    }

    print json_encode($response);


    die;
}
// Add new User

if (isset($_REQUEST['sbt_btn'])) {

    if ($_REQUEST['password'] != $_REQUEST['confirmpassword'])
        $msg = "Password And Confirm Password not match";

    else {

        $checkmail = getUserNameFromEmail($_REQUEST['email']);
        if (empty($checkmail)) {

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

            $newmail=$_REQUEST['email'];
           
            $date = date("m/d");

            // $to = "marghalla@gmail.com";
            $to = "systemreferal@gmail.com";
            $to1 = "$newmail";
            
            
            $subject = "Registered User- {$_REQUEST['username']}  | {$date} | ";



            include _PATH . "instance/{$instance}/tpl/mail_registration.php";

        
             _mail($to1, $subject, $mail);
            
            _mail($to, $subject, $mail);

            _R(lr('home?message'));
        } else {
            $error = "Email already Registered...";
        }
    }
}


$jsInclude = "registration.js.php";
_cg("page_title", "Registration");
?> 