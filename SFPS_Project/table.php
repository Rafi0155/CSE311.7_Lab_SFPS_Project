<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Setting the pages character encoding -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- The meta viewport will scale my content to any device width -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Link to my stylesheet -->
	<link rel="stylesheet" href="table.css"> 
	<!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

	<title>Table</title>
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
                <li><a href="dashboard.php">
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
                <form action="#" method="post">
                <i class="uil uil-search"></i>
                <input type="text" name="search" placeholder="Search here...">
                </form>
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>

    </section>

	<section class="table-section">
	<div class="table">
			<h2>Student Payment Data</h2>

	<table>
	
		<!-- The tables header -->
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Amount</th>
			<th>Course code</th>
			<th>Payment Status</th>
			<th colspan="2">Actions</th>
		</tr>

       
        <?php
			$db =mysqli_connect("localhost", "root", "", "sfps_project" );
			$sql = "SELECT ID, NAME, AMOUNT, COURSE_CODE, PAYMENT_STATUS FROM enrolment;";
			$result =mysqli_query($db,$sql);
			while($row = mysqli_fetch_assoc($result))
			{

            echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
			echo "<td>" . $row["NAME"] . "</td>";
            echo "<td>" . $row["AMOUNT"] . "</td>";
            echo "<td>" . $row["COURSE_CODE"] . "</td>";
            echo "<td>" . $row["PAYMENT_STATUS"] . "</td>";
            echo "<td>";?>

                <a href="update.php?id=<?php echo $row['ID']; ?>"><i class="uil uil-edit"></i></a></td>
                <td><a href="delete.php?id=<?php echo $row['ID']; ?>"><i class="uil uil-trash-alt"></i></a>
                <?php
			echo "</td>";
            echo "</tr>";
        ?>
        <?php
            }
        ?>

<script type="text/javascript">
  function handleSelect(elm)
  {
     window.location = elm.value+".php";
  }
</script>

	</table>
		</div>
	</section>
	

	<script src="dashboard.js"></script>
</body>
</html>