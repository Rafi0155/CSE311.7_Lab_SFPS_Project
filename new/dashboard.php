<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="dashboard.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Dashboard</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">SFPS Project</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="table.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content</span>
                </a></li>
                <li><a href="enroll.php">
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

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-clipboard"></i>
                        <span class="text">Total Registration</span>

                        <?php
			            $db =mysqli_connect("localhost", "root", "", "sfps_project" );
			            $sql = "SELECT ID FROM enrolment;";
			            $result =mysqli_query($db,$sql);
                        $i = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            $i++;
                        }
                         ?>

                        <span class="number"><?php echo $i ?></span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-check-circle"></i>
                        <span class="text">Successful Payment</span>
                        <?php
			            $db =mysqli_connect("localhost", "root", "", "sfps_project" );
			            $sql = "SELECT ID FROM enrolment WHERE PAYMENT_STATUS = 1;";
			            $result =mysqli_query($db,$sql);
                        $i = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            $i++;
                        }
                         ?>

                        <span class="number"><?php echo $i ?></span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-exclamation-triangle"></i>
                        <span class="text">Incomplete Payment</span>
                        <?php
			            $db =mysqli_connect("localhost", "root", "", "sfps_project" );
			            $sql = "SELECT ID FROM enrolment WHERE PAYMENT_STATUS = 0;";
			            $result =mysqli_query($db,$sql);
                        $i = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            $i++;
                        }
                         ?>

                        <span class="number"><?php echo $i ?></span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>

                        <?php
			            $db =mysqli_connect("localhost", "root", "", "sfps_project" );
			            $sql = "SELECT NAME FROM enrolment ORDER BY ENROLL_DATE DESC;";
			            $result =mysqli_query($db,$sql);
			            while($row = mysqli_fetch_assoc($result))
			            {?>
                            <span class="data-list"><?php echo $row["NAME"]; ?></span> <?php
                        }
                            ?>

                        
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <?php
			            $db =mysqli_connect("localhost", "root", "", "sfps_project" );
			            $sql = "SELECT EMAIL FROM enrolment ORDER BY ENROLL_DATE DESC;";
			            $result =mysqli_query($db,$sql);
			            while($row = mysqli_fetch_assoc($result))
			            {?>
                            <span class="data-list"><?php echo $row["EMAIL"]; ?></span> <?php
                        }
                            ?>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <?php
			            $db =mysqli_connect("localhost", "root", "", "sfps_project" );
			            $sql = "SELECT ENROLL_DATE FROM enrolment ORDER BY ENROLL_DATE DESC;";
			            $result =mysqli_query($db,$sql);
			            while($row = mysqli_fetch_assoc($result))
			            {?>
                            <span class="data-list"><?php echo $row["ENROLL_DATE"]; ?></span> <?php
                        }
                            ?>
                    </div>
                    <div class="data type">
                        <span class="data-title">Gender</span>
                        <?php
			            $db =mysqli_connect("localhost", "root", "", "sfps_project" );
			            $sql = "SELECT GENDER FROM enrolment ORDER BY ENROLL_DATE DESC;";
			            $result =mysqli_query($db,$sql);
			            while($row = mysqli_fetch_assoc($result))
			            {?>
                            <span class="data-list"><?php echo $row["GENDER"]; ?></span> <?php
                        }
                            ?>
                    </div>
                    <div class="data status">
                    <span class="data-title">Status</span>
                    <?php
			            $db =mysqli_connect("localhost", "root", "", "sfps_project" );
			            $sql = "SELECT PAYMENT_STATUS FROM enrolment ORDER BY ENROLL_DATE DESC;";
			            $result =mysqli_query($db,$sql);
			            while($row = mysqli_fetch_assoc($result))
			            {?>
                            <span class="data-list"><?php if($row["PAYMENT_STATUS"] == 0){
                                echo "UNPAID";
                            }else{
                                echo "PAID";
                            } ; ?></span> <?php
                        }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="dashboard.js"></script>
</body>
</html>