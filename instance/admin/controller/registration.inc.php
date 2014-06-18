<?php

$urlArgs = _cg("url_vars");


if (isset($_REQUEST['fields']) && $_REQUEST['fields']['reg_id'] > 0) {
   
    $new_reg_id = Registration::update($_REQUEST['fields'], $_REQUEST['fields']['reg_id']);
    if ($new_reg_id > 0) {
        $greetings = "Registration updated successfully";
        unset($_REQUEST['fields']);
    }
}


$addIcon = "plus";
$addLabel = "Add RegisterList";
$action_type = "add";
$username = '';
$salutation = '';
$fname = '';
$lname = '';
$company = '';
$city = '';
$province = '';
$postal_code = '';
$phone = '';
$email = '';
$about_program = '';
$like_update = '';
$address = '';
$id_val = '';
$vehicleIds = '';
$help = '';
switch ($urlArgs[0]) {
    case "edit":
        $subTpl = "registration_add.php";
        $addIcon = "edit";
        $addLabel = "Edit Registration";
        $action_type = "edit";
        $activeMenuAdd = "active";
        if ($urlArgs[1] > 0) {

            $view_data = Registration::getregistrationDetail($urlArgs[1]);
            $username = $view_data['username'];
            $salutation = $view_data['salutation'];
            $fname = $view_data['fname'];
            $lname = $view_data['lname'];
            $company = $view_data['company'];
            $city = $view_data['city'];
            $province = $view_data['province'];
            $postal_code = $view_data['postal_code'];
            $phone = $view_data['phone'];
            $email = $view_data['email'];
            $about_program= $view_data['about_program'];
            $like_update = $view_data['like_update'];
            $address = $view_data['address'];
            
            $id_val = $urlArgs[1];
        }

        break;
    case "add":
        $subTpl = "registration_add.php";
        $activeMenuAdd = "active";
        break;
    case "delete":
        $delete_data = Registration::delete($urlArgs[1]);
        if ($delete_data) {
            $greetings = "Register deleted successfully";
            $_SESSION['greetings_msg'] = $greetings;
        } else {
            $error = "Unable to delete register";
            $_SESSION['error_msg'] = $error;
        }
        _R(lr('registration/list'));
        break;
    default:
        $reg = Registration::getregisterList();

        $subTpl = "registration_list.php";
        $activeMenuList = "active";
}


$jsInclude = "registration.js.php";
_cg("page_title", "Registration");
?>
