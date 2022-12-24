    <?php
    
        $login_db =mysqli_connect("localhost", "root", "", "sfps_project" );

        if(!$login_db)
        {
            echo "Database not connected";
        }
        else
        {
            //echo "Database connected";

        if(isset($_POST['email1'])){
        $_name = $_POST['text'];
        $_email = $_POST['email1'];
        $_pass = $_POST['pswd1'];
 
        $sql_Insert = "INSERT INTO login_db(Email, User_Name, User_Password) 
                        VALUES ('$_email', '$_name', '$_pass')";

        try{                
        $result_Insert = mysqli_query($login_db, $sql_Insert);
        $enroll_success = "Sign up Successful!";
        }catch(Exception $e){
            $enroll_error = "Email already exists!";
            include('login.php');
            header( "refresh:3; url=login.php" );
        }
        //header('Location:login.php');
        
        
    }
}
    ?>