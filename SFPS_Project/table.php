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
                <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content</span>
                </a></li>
                <li><a href="table.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Analytics</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Like</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
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

	<section class="table-section">
	<div class="table">
			<h2>Student's Payment Data</h2>

	<table>
	
		<!-- The tables header -->
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Course code</th>
			<th>Amount</th>
			<th>Payment Status</th>
			<th>Actions</th>
		</tr>

		<!-- The html template we will use in our loop -->
		<tr>
			<td> <!-- The products image --> </td>
			<td> <!-- The products name --> </td>
			<td> <!-- The products price --> </td>
			<td> <!-- The products code --> </td>
			<td> <!-- The products inventory --> </td>
			<td>
				<!-- Edit actions -->
				<select name="actions" id="actions">
					<option value="">Select action</option>
					<option value="remove">Remove</option>
					<option value="edit">Edit</option>
					<option value="sold-out">Sold out</option>
				</select>
			</td>
		</tr>
	</table>
		</div>
	</section>
	

	<script src="dashboard.js"></script>
</body>
</html>