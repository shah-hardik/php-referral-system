<?php

/**
 * Registration Class
 * 
 * @author Hardik shah 
 * @version 1.0
 * @package
 * 
 */
class Registration {
    # constructor
 public static $user_data = array();

     public static function add($fields) {
        // Escape array for sql hijacking prevention
        $data = _escapeArray($fields);

        $map = array();
        $map['username'] = 'username';
        $map['salutation'] = 'salutation';
        $map['fname'] = 'fname';
        $map['lname'] = 'lname';
        $map['company'] = 'company';
        $map['city'] = 'city';
        $map['province'] = 'province';
        $map['postal_code'] = 'postal_code';
        $map['phone'] = 'phone';
        $map['email'] = 'email';
        $map['about_program'] = 'about_program';
        $map['like_update'] = 'like_update';
        $map['address'] = 'address';
        $ds = _bindArray($data, $map);
        return qi('registration', $ds);
    }
    

    public static function update($fields, $id) {
        // Escape array for sql hijacking prevention
        $data = _escapeArray($fields);
        $map = array();


        
        $map['username'] = 'username';
        $map['salutation'] = 'salutation';
        $map['fname'] = 'fname';
        $map['lname'] = 'lname';
        $map['company'] = 'company';
        $map['city'] = 'city';
        $map['province'] = 'province';
        $map['postal_code'] = 'postal_code';
        $map['phone'] = 'phone';
        $map['email'] = 'email';
        $map['about_program'] = 'about_program';
        $map['like_update'] = 'like_update';
        $map['address'] = 'address';
        $ds = _bindArray($data, $map);

        $condition = "id = " . $id;
        return qu('registration', $ds, $condition);
    }

    public static function delete($id) {
        $condition = "id =" . $id;
        return qd('registration', $condition);
    }
    
    public static function doRegistration($email, $password) {
        self::$user_data = qs(sprintf("select email,password from registration where email = '%s' and password = '%s'", $email, md5($password)));
        if (!empty(self::$user_data)) {
            self::$user_data['user_type'] = 'admin';
        }
        return empty(self::$user_data) ? false : true;
    }
    
     public static function initEmailSession($email) {
        self::$user_data = qs("select * from registration where email = '{$email}'");
        self::$user_data['user_type'] = 'admin';
        User::setSession($email);
        session_regenerate_id();
    }
    public static function setSession($email) {
        // d(self::$user_data);
        $_SESSION['email'] = self::$user_data;
    }
    /**
     *  Kill the session
     */
    public static function killSession() {
        session_destroy();
        unset($_SESSION);
    }

    public static function getregistrationDetail($id) {
        return qs("SELECT * FROM registration WHERE id = " . $id);
    }

    public static function getregisterList() {
        return q("SELECT * FROM registration");
    }

  
}

?>
