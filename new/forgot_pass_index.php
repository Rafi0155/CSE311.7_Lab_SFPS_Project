<?php require("forgot_pass.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFPS Reset Password</title>
    
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
<?php
    if($reset_error != null){
            ?> <style>.error{display:block}</style> <?php
    }
    if($reset_success != null){
        ?> <style>.success{display:block}</style> <?php
    }
    ?>
    <div class="container-fp" id="main">
        <div class="forgot-pass">
            <form action="" method="post">
                <br></br>
                <h1>Reset Password</h1>
                <br></br>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pswd" placeholder="New Password" required="">
                <br>

                <button type="submit" name="sign-in" value="Sign In">Continue</button>
                <button type="button" onclick="location.href='login.php'">Cancel</button>

                <p class="error reset-error">
                    <?php echo $reset_error; ?>
                </p>
                <p class="success">
                    <?php echo $reset_success; ?>
                </p>
                
            </form>
        </div>
    </div>
    
</body>
</html>