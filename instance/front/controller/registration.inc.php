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
           $to = SYSTEM_EMAIL;
            $to1 = $newmail;
           
            $subject = "Registered User- {$_REQUEST['username']}  | {$date} | ";
            $mailtext = "Thank you for registering for Mercer’s Realtor Referral Program.
			
			Mercer’s Lifelong Homes network of real estate professionals and mortgage brokers is essential to our success as a homebuilder and we consider both to be our sales partners and a member of our team.  Whether you bring a client through our doors or have them contact us directly, you can be assured that they will be working with an experienced builder that is committed to the highest level of customer satisfaction.

			We value the relationships that we build and want to reward you for trusting and supporting Mercer’s Life Long Homes.  Take advantage of our Referral Program as many times as you like! Register your family, friends or clients.  The Mercer’s Lifelong Homes Referral Program offers the following compensation:     

			New Home:
            We offer $1000 referral fee if a referred clients signs a new home contract with us.
            
			Remodel | Addition:
            We offer $500 referral fee if a referred clients signs a remodel or addition contract with us.

            Garage:
            We offer $250 referral fee if a referred clients signs a garage contract with us.
 
            Thank you again for registering and we look forward to doing business with you.";


           include _PATH . "instance/{$instance}/tpl/mail_registration.php";
           //include _PATH . "instance/{$instance}/tpl/mail_text.php";
        
            _mail($to1, $subject, $mailtext);
            
			_mail($to, $subject, $mail);

            _R(lr('register_redirect'));
        } else {
            $error = "Email already Registered...";
        }
    }
}


$jsInclude = "registration.js.php";
_cg("page_title", "Registration");
?> 