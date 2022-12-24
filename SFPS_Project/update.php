<?php require("enroll_script.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="table.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Enrolment Form </title> 
</head>
<body>
<?php
        if($enroll_error != null){
            ?> <style>.error{display:block}</style> <?php
        }
        if($enroll_success != null){
        ?> <style>.success{display:block}</style> <?php
        }
      ?>
        
<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">SFPS Project</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="dashboard.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="table.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-clipboard"></i>
                    <span class="link-name">Enroll</span>
                </a></li>
                
            </ul>
            
            <ul class="logout-mode">
                <li><a href="login.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>
	<section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>

    </section>

    <section class="form-section">
    <div class="container">
    <div class="title">Enrolment</div>
    <div class="content">
    
      <form action="" method="get">

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

      if(isset($_POST['submit'])){
        $_name = $_POST['text'];
        $_email = $_POST['email'];
        $dob = $_POST['dob'];
        $p_number = $_POST['number'];
        $id = $_POST['id'];
        $c_code = $_POST['coarse_code'];
        $amount = $_POST['amount'];
        $en_date =  $_POST['enroll_date'];
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
        $id = $_GET['ID'];
        echo $id;
      $selectquery = "SELECT * FROM enrolment WHERE ID = $id";
      $query = mysqli_query($login_db, $selectquery);
      $result = mysqli_fetch_assoc($query);
      }
      ?>
      
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="text" placeholder="Enter your name" value="<?php echo $result['name'];?>" required>
          </div>
          
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" value="<?php echo $result['email'];?>" required>
          </div>
          <div class="input-box">
            <span class="details">Date of birth</span>
            <input type="date" name="dob" placeholder="Enter Amount" value="<?php echo $result['dob'];?>" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" name="number" placeholder="Enter your number" value="<?php echo $result['number'];?>" required>
          </div>
          <div class="input-box">
            <span class="details">ID</span>
            <input type="number" name="id" placeholder="Enter your ID" value="<?php echo $result['id'];?>" required>
          </div>
          <div class="input-box">
            <span class="details">Course code</span>
            <input type="text" name="coarse_code" placeholder="Enter Course code" value="<?php echo $result['coarse_code'];?>" required>
          </div>
          <div class="input-box">
            <span class="details">Amount</span>
            <input type="number" name="amount" placeholder="Enter Amount" value="<?php echo $result['amount'];?>" required>
          </div>
          <div class="input-box">
            <span class="details">Enroll date</span>
            <input type="date" name="enroll_date" placeholder="Enter date" value="<?php echo $result['enroll_date'];?>" required>
          </div>

        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="Male" id="dot-1">
          <input type="radio" name="gender" value="Female"  id="dot-2">
          <input type="radio" name="gender" value="Others"  id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Others</span>
            </label>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" name="submit" value="Update">
        </div>

        <p class="error reset-error">
          <?php echo $enroll_error; ?>
        </p>
        <p class="success">
          <?php echo $enroll_success; ?>
        </p>

      </form>
    </div>
  </div>

    </section>

    <script src="dashboard.js"></script>
</body>
</html>