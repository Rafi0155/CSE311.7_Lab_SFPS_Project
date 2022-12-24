<?php
$error = null;

$login_db =mysqli_connect("localhost", "root", "", "sfps_project" );

if(!$login_db)
{
    echo "Database not connected";
}
else
{
    //echo "database connected" . "<br>" ;

}
if(isset($_POST['email'])){
    $_email = $_POST['email'];
    $_pass = $_POST['pswd'];

    $sql_Select = "SELECT * FROM login_db 
                    WHERE Email = '".$_email."' 
                    AND User_Password = '".$_pass."' LIMIT 1";

    $result_Select = mysqli_query($login_db, $sql_Select);

    if(mysqli_num_rows($result_Select)==1){
        echo "Login Successfully<br>";
        header('Location:dashboard.php');
    }else{
        $error = "Sign in Failed!";
        //echo "Login Failed<br>";

    }

}


?>