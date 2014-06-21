<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$urlArgs = _cg("url_vars");
$reg_id = $urlArgs[0];
d($reg_id);
$each_data = qs("select * from registration where id = '{$urlArgs[0]}'");


if (isset($_REQUEST['sbt_btn'])) {

        qu('registration', array(
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
        'email' => _escape($_REQUEST['emailaddress']),
        'about_program' => _escape($_REQUEST['program1']),
        'like_update' => _escape($_REQUEST['like_update'])
        
            
            ), " id = '{$each_data['id']}'");

}
?>
