<?php session_start();
	

/**
 * Admin User Dashboard File
 * 
 * 
 * @author Hardik Panchal <hardikpanchal469@gmail.com>
 * @version 1.0
 * @package BePure
 * 
 */

$data = q("select * from registration where id='6' ");
d($data);
d('email');
die();


$urlArgs = _cg("url_vars");

d($_REQUEST);
d($_REQUEST['email']);
d($_REQUEST['password']);


$data = q("select * from registration where email =$_REQUEST'[email]' ");
d($data);
die();

if (isset($_REQUEST['sbt_btn'])) {
 
    if ($_REQUEST['email']) {

        $email = _escape($_REQUEST['email']);
        $password = _escape($_REQUEST['password']);
        if (Registration::doRegistration($email, $password)) {
            Registration::initEmailSession($email);
            //_R(lr('home'));
            _R(lr('my_account'));
        } else {
            $error = "Invalid Credentials";
        }
        $jsInclude = "home.js.php";
    }
    $no_visible_elements = true;
} else {
  _R(lr('my_account'));

}
_cg("page_title", "my_account");
?>
