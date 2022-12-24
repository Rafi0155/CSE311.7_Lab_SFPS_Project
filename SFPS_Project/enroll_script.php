<?php

$enroll_error = null;
$enroll_success = null;

        $login_db =mysqli_connect("localhost", "root", "", "sfps_project" );

        if(!$login_db)
        {
            echo "Database not connected";
        }
        else
        {
            //echo "Database connected";

        if(isset($_POST['email'])){
        $_name = $_POST['text'];
        $_email = $_POST['email'];
        $dob = $_POST['dob'];
        $p_number = $_POST['number'];
        $id = $_POST['id'];
        $c_code = $_POST['coarse_code'];
        $amount = $_POST['amount'];
        $en_date = $_POST['enroll_date'];
        $gender = $_POST['gender'];

        if($gender == "Male")
        {
            $gender = "Male";
        }
        else if ($gender == "Female")
        {
            $gender = "Female";
        }else{
            $gender = "Others";
        }

        $sql_Insert = "INSERT INTO enrolment(ID, NAME, EMAIL, PHONE_NO, DOB, GENDER, COURSE_CODE, AMOUNT, ENROLL_DATE) 
                                  VALUES($id,'$_name','$_email', $p_number, '$dob', '$gender', '$c_code', $amount, '$en_date')";

        try
        {
                $result_Insert = mysqli_query($login_db, $sql_Insert);
                $enroll_success = "Enrolment Successfully";
        }catch(Exception $e){
            $enroll_error = "Enrolment Failed!";
        }

    }
    }
    ?>