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
$urlArgs = _cg("url_vars");








//d($_REQUEST);
//d($_REQUEST['email']);
//d($_REQUEST['password']);


              $email= _escape($_REQUEST['email']);
              $password = _escape($_REQUEST['password']);
              
             $data = q("select email,password from registration where email = '$email'  AND password = '$password' ");
         //   d($data);

             
             
if ($data==1)
    {
 
          _R(lr('my_account'));
        } 
        
        else {
        
            $error = "Invalid Credentials";
        
            // _R(lr('my_account'));
}
_cg("page_title", "my_account");
?>
