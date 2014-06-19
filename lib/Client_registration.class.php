<?php

/**
 * Registration Class
 * 
 * @author Hardik shah 
 * @version 1.0
 * @package
 * 
 */
class Client_registration {
    # constructor

     public static function add($fields) {
        // Escape array for sql hijacking prevention
        $data = _escapeArray($fields);

        $map = array();
       
        $map['salutation'] = 'salutation';
        $map['fname'] = 'fname';
        $map['lname'] = 'lname';
        $map['company'] = 'company';
        $map['city'] = 'city';
        $map['province'] = 'province';
        $map['postal_code'] = 'postal_code';
        $map['phone'] = 'phone';
        $map['email'] = 'email';
        $map['client_interes'] = 'client_interes';
        $map['additional_information'] = 'additional_information';
        $map['area_community'] = 'area_community';
        $map['address'] = 'address';
        $ds = _bindArray($data, $map);
        return qi('client_registration', $ds);
    }
    

    public static function update($fields, $id) {
        // Escape array for sql hijacking prevention
        $data = _escapeArray($fields);
        $map = array();


        
        
        $map['salutation'] = 'salutation';
        $map['fname'] = 'fname';
        $map['lname'] = 'lname';
        $map['company'] = 'company';
        $map['city'] = 'city';
        $map['province'] = 'province';
        $map['postal_code'] = 'postal_code';
        $map['phone'] = 'phone';
        $map['email'] = 'email';
        $map['client_interes'] = 'client_interes';
        $map['additional_information'] = 'additional_information';
        $map['area_community'] = 'area_community';
       
        $map['address'] = 'address';
        $ds = _bindArray($data, $map);

        $condition = "id = " . $id;
        return qu('client_registration', $ds, $condition);
    }

    public static function delete($id) {
        $condition = "id =" . $id;
        return qd('client_registration', $condition);
    }

    public static function getclientregistrationDetail($id) {
        return qs("SELECT * FROM client_registration WHERE id = " . $id);
    }

    public static function getclientregisterList() {
        return q("SELECT * FROM client_registration");
    }

  
}

?>
