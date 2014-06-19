<?php

/**
 * flight Class
 * 
 * @author Raj Bose 
 * @version 1.0
 * @package Brilliant
 * 
 */
class Registration {
    # constructor
 public static $user_data = array();

    

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
        self::$user_data = qs(sprintf("select * from registration where email = '%s' and password = '%s'", $email, md5($password)));
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
    
    public static function getregistrationDetail($id) {
        return qs("SELECT * FROM registration WHERE id = " . $id);
    }

    public static function getregisterList() {
        return q("SELECT * FROM registration");
    }

    public static function CheckComboBoxAnswerTrue($trip_code, $checkListId, $answer) {
        $res = qs("SELECT * FROM flightsurvey WHERE tripCode = '" . $trip_code . "' AND checkListId = '" . $checkListId . "' AND answer = '" . $answer . "'");

        if (!empty($res)) {
            return 'selected';
        } else {
            return '';
        }
    }

    public static function CheckCheckBoxAnswerTrue($trip_code, $checkListId) {
        $res = qs("SELECT * FROM flightsurvey WHERE tripCode = '" . $trip_code . "' AND checkListId = '" . $checkListId . "'");
        if (!empty($res)) {
            $answer = explode("\n", $res['answer']);
            return $answer;
        } else {
            return '';
        }
    }

    public static function CheckRadioBoxAnswerTrue($trip_code, $checkListId, $answer) {
        $res = qs("SELECT * FROM flightsurvey WHERE tripCode = '" . $trip_code . "' AND checkListId = '" . $checkListId . "' AND answer = '" . $answer . "'");
        if (!empty($res)) {
            return 'checked';
        } else {
            return '';
        }
    }

    public static function CheckTextareaAnswerTrue($trip_code, $checkListId) {
        $res = qs("SELECT * FROM flightsurvey WHERE tripCode = '" . $trip_code . "' AND checkListId = '" . $checkListId . "'");
        if (!empty($res)) {
            return trim($res['answer']);
        } else {
            return '';
        }
    }

    /**
     * 
     * Retrieve checklist data
     * This is generic function to get filled up survey value from tripcode and question id
     * 
     * @param string $tripCode
     * @param string $question_id
     * @return string
     * @since January 13, 2014
     * @author Hardik Panchal<hardikpanchal469@gmail.com>
     * 
     */
    public static function getCheckListData($tripCode, $question_id) {
        $query = "select * from  flightsurvey where checkListId = '{$question_id}' AND tripCode = '{$tripCode}'";
        $data = qs($query);
        return $data['answer'] ? $data['answer'] : "No Data";
    }

    /**
     * Get preflight odometer value
     * 
     * @param string $tripCode
     * @return string
     * @since January 13, 2014
     * @author Hardik Panchal<hardikpanchal469@gmail.com>
     */
    public static function odometer($tripCode) {
        return self::getCheckListData($tripCode, '3');
    }

    /**
     * 
     * Get Preflight fuel Level
     * 
     * @param string $tripCode
     * @return string
     * @since January 13, 2014
     * @author Hardik Panchal<hardikpanchal469@gmail.com>
     * 
     */
    public static function fuelLevel($tripCode) {
        return self::getCheckListData($tripCode, '2');
    }

    public static function getQuestionOptions($questionId) {
        $questionInfo = getQuestionFromId($questionId, true);
        return extractAnswers($questionInfo['options']);
    }

    public static function getQuestionOptionsByType($questionId, $type) {
        $type = _escape($type);
        $query = "select * from checklist_options_cartype where checklist_question_id = '{$questionId}' AND carType = '{$type}'";
        $data = q($query);
        $return = array();
        foreach ($data as $each_array) {
            $return[] = trim($each_array['options']);
        }
        return $return;
    }

    public static function startTracking($tripCode, $type, $carId, $carType) {
        $data = qs("select * from tripsurveysummary where tripCode = '{$tripCode}' AND survey_type = '{$type}' ");

        $ip = $_SERVER['REMOTE_ADDR'];
        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        if (!empty($data)) {
            qu("tripsurveysummary", array("ip" => $ip, 'user_agent' => $user_agent, "survey_status" => "Started", 'carIdLA' => $carId, 'carName' => $carType, 'survey_start_time' => date('Y-m-d H:i:s')), " id = '{$data['id']}' ");
        } else {
            qi("tripsurveysummary", array("ip" => $ip, 'user_agent' => $user_agent, "survey_status" => "Started", 'carIdLA' => $carId, 'carName' => $carType, "user_id" => $_SESSION['user']['id'], 'survey_start_time' => date('Y-m-d H:i:s'), "tripCode" => $tripCode, "survey_type" => $type));
        }
    }

    public static function stopTracking($tripCode, $type) {
        $data = qs("select * from tripsurveysummary where tripCode = '{$tripCode}' AND survey_type = '{$type}' ");
        $endTime = date('Y-m-d H:i:s');

        if (!empty($data)) {
            $totalTime = timeDiffInMins($endTime, $data['survey_start_time']);
            qu("tripsurveysummary", array("survey_status" => "Completed", "total_survey_time" => $totalTime, 'survey_end_time' => $endTime), " id = '{$data['id']}' ");
        } else {
            // this is rare case.
            qi("tripsurveysummary", array("survey_status" => "Completed", "user_id" => $_SESSION['user']['id'], "total_survey_time" => "0 Mins", 'survey_end_time' => date('Y-m-d H:i:s'), "tripCode" => $tripCode, "survey_type" => $type));
        }
    }

    public static function getSurveyCompletionTime($tripCode, $type) {
        $data = qs("select * from tripsurveysummary where tripCode = '{$tripCode}' AND survey_type = '{$type}' ");
        return $data['total_survey_time'];
    }

    /**
     * 
     * Get list of preflight for driver to fillup the survey
     * Here, we dont want to get all the trips for scalability reason
     * 
     * For scalability we would show only last three days trip
     * 
     * Copmlete operation can be implemented using a single complex query
     * However, it is divided into three queries from scalability point of view
     * 
     * @param integer $driverId
     * @param date $date
     * @author Hardik Panchal<hardikpanchal469@gmail.com>
     * @since Feb 03, 2014
     * 
     * 
     */
    public static function getTripsForPreFlight($driverId, $date, $type = 'pf') {
        $data = q("select * from tripconfirmationtexts where driverId = '{$driverId}' AND date(tripTime) >= '{$date}' group by tripCode order by tripTime DESC ");
        return $data;
        $trips = array();
        if (!empty($data)) {
            $remaining_trip = array();
            foreach ($data as $each_data) {
                $remaining_trip[] = $each_data['tripCode'];
                continue;
//                $tripFilledUp = qs("select * from  tripsurveysummary where tripCode = '{$each_data['tripCode']}' and survey_type = '{$type}'  ");
//                if (empty($tripFilledUp)) {
//                    $remaining_trip[] = $each_data['tripCode'];
//                }
            }

            if (!empty($remaining_trip)) {
                $tripCodes = "'" . implode("','", $remaining_trip) . "'";
                $query = "select * from tripconfirmationtexts where tripCode in ({$tripCodes}) ORDER BY id desc  ";
                $trips = q($query);
            }
        }
        return $trips;
    }

    public static function questionVisible($question_id, $car_type, $type) {

        $query = "select * from questions_cartype where question_id = '{$question_id}' AND cartype_name = '{$car_type}' AND section = '{$type}' ";
        $data = q($query);
        return count($data) ? true : false;
    }

    public static function CheckForReadyBtn($tripCode) {
        return qs("SELECT * FROM tripconfirmationsummary WHERE tripCode = '" . $tripCode . "'");
    }

    public static function TodatyTripList($start_date, $end_date) {
        return q("select * from tripconfirmationtexts where date(tripTime) >= '{$start_date}' AND date(tripTime) <= '{$end_date}' group by tripCode order by tripTime DESC ");
    }

}

?>
