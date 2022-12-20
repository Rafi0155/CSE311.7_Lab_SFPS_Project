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

            $sql_Update = "UPDATE login_db 
                            SET User_Password = '".$_pass."' 
                            WHERE Email = '".$_email."'";

            $result_Update = mysqli_query($login_db, $sql_Update);

            if($result_Update){
                echo "Reset Successfully<br>";
            }else{
                echo "Reset Failed<br>";
            }

        }
        else
        {
            echo "error" . mysqli_error($login_db);
        }
?>
<a href="login.html">Go back</a>;