<?php

        $login_db =mysqli_connect("localhost", "root", "", "sfps_project" );

        if(!$login_db)
        {
            echo "Database not connected";
        }
        else
        {
            echo "database connected" . "<br>" ;
        }

        if(isset($_POST['email'])){
            $_email = $_POST['email'];
            $_pass = $_POST['pswd'];

            $sql_Select = "SELECT * FROM login_db 
                            WHERE Email = '".$_email."'";

            $result_Select = mysqli_query($login_db, $sql_Select);

            if(mysqli_num_rows($result_Select)==1){

                mysqli_query($login_db, "UPDATE login_db 
                                        SET User_Password = '".$_pass."' 
                                        WHERE Email = '".$_email."'");

                echo "Reset Successfully<br>";
                include 'login.html';
                
            }else{
                echo "Reset Failed<br>";
                include 'forgot_pass.html';
            }

        }
        else
        {
            echo "error" . mysqli_error($login_db);
        }
?>
<a href="forgot_pass.html">Go back</a>;