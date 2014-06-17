<?php

/**
 *
 * @author Hardik Panchal <hardikpanchal469@gmail.com>
 * @version 1.0
 * @package BePure
 * 
 * credentials:
 * 
 *  
 *  https://signin.infusionsoft.com/login?service=https://os140.infusionsoft.com/j_spring_cas_security_check

    Use: ben@bepure.co.nz
    Incredible22
  
    1. http://help.infusionsoft.com/developers/tables : 
    2. http://help.infusionsoft.com/api-docs/dataservice#query
  
    API KEY: 7b6e7bf7278e41be52eda569b9f563bf

   
 *  ----FASTWAY----
 *  Then we want this information pushed into Fastway, please use the details below...

    www.fastwaycustomer.com

    Username: info@bepure.co.nz
    Password: 0630452

 *  Please use this link to access fastlabel documentation for integration, 
    http://api.fastway.org/v2/docs/index.html?api_key=fc02f7481690e29cc62b6f816fb8cfde 
 *  
 *  Precisely FastLabel documentation is here:
 *  http://api.fastway.org/v2/docs/detail?ControllerName=fastlabel&api_key=fc02f7481690e29cc62b6f816fb8cfde

 
 * 
 * www.fastwayintegration.info. 

Dns Zone check is enabled.
+===================================+
| New Account Info                  |
+===================================+
| Domain: fastwayintegration.info
| Ip: 97.79.238.112 (n)
| HasCgi: y
| UserName: fastwayi
| PassWord: Integration123
| CpanelMod: x3
| HomeRoot: /home
| Quota: unlimited Meg
| NameServer1: ns1.gvodns.com
| NameServer2: ns2.gvodns.com
| NameServer3: 
| NameServer4: 
| Contact Email: ben@bepure.co.nz
| Package: default
| Feature List: default
| Language: en
+====================
 * 
 * 
 * 
 * 
 * 
 */
session_start();
error_reporting(0);


# DB informaitons
define('DB_HOST', 'localhost');
define('DB_PASSWORD', '');
define('DB_UNAME', 'root');
define('DB_NAME', 'infusionsoft-api');

include "loader.php";
?>
