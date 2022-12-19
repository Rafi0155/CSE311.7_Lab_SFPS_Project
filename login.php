<?php
$login_db = mysqli_connect("localhost", "root", "", "sfps project");

if($login_db){
    echo "Database connected!"."<br>";
    $sql_Create = "CREATE TABLE login_db(Email CHAR(100) PRIMARY KEY, User_Name VARCHAR(100) NOT NULL, User_Password INT NOT NULL);";
    $result_Create = mysqli_query($login_db, $sql_Create);

        $_name = $_POST['text'];
        $_email = $_POST['email'];
        $_pass = $_POST['pswd'];

        $sql_Insert = "INSERT INTO login_db(Email, User_Name, User_Password) VALUES ('$_email', '$_name', $_pass)";

        $result_Insert = mysqli_query($login_db, $sql_Insert);

        if($result_Insert)
        {
            echo "Information Inserted <br>";
        }       
        else
        {
            echo "error";
        }

}else{
    echo "Connection ERROR".mysqli_error($login_db)."<br>";
}
?>
<a href="login.html">Go back</a>;