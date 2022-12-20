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

        $_name = $_POST['text'];
        $_email = $_POST['email'];
        $_pass = $_POST['pswd'];
 
        $sql_Insert = "INSERT INTO login_db(Email, User_Name, User_Password) 
                        VALUES ('$_email', '$_name', '$_pass')";
        $result_Insert = mysqli_query($login_db, $sql_Insert);

        if($result_Insert)
        {
            echo "Information Inserted <br>"; 
        }
        else
        {
            echo "error" . mysqli_error($login_db);
        }
    ?>
    <a href="login.html">Go back</a>;