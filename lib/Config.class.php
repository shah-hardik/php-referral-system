<?php

/**
 * Config Class
 * 
 * Class to handle config operations
 * 
 * @author Hardik Panchal <hardikpanchal469@gmail.com>
 * @version 1.0
 * @package BePure
 * 
 */
class Config {

    /**
     * Mechanism to access variable globally
     * @var Array $_vars
     */
    public static $_vars = array();

    # constructor

    public function __construct() {
        
    }

    public static function getData($keyArray) {
        $fields = ("'" . implode("','", $keyArray) . "'");
        return q("select * from config where `key` IN ({$fields})");
    }

    public static function updateDate($valueArray) {
        foreach ($valueArray as $key => $value) {
            qu("config", array('value' => $value), " `key` = '{$key}' ");
        }
    }

}

?>