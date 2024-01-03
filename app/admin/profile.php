<?php
	session_start();
	if(isset($_SESSION['user'])==false){
		header("location:../account/login.php");
	}
		if(isset($_SESSION['user'])==true)
	{
		if($_SESSION['user']['usertype']!="admin")
		{
				header("location:../account/login.php");
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
<link rel="stylesheet" href="css/profile.css">
	<title>Profile</title>
</head>
<body width="1600">
	<table align="center" width="1600" >
		
		<tr>
			<th colspan="4" align="center" width="60%">
				<nav>
					<a href="loggedin.php"><img src="pictures\eshop_logo.png" align="left" align="top" width="20%"></a>
					<div class="search-bar">
						<input type="text" class="search-input" placeholder="Search...">
						<button class="search-button">Search</button>
					</div>
					
					Login as <a href="profile.php"><?= $_SESSION['user']['name']; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				
					
					
				<div class="sidebar">
					<ul>
					 <a href="loggedin.php">Home</a></li>
					   <a href="profile.php">View profile</a></li>
						<a href="editprofile.php">Settings</a>
						<a href="changepass.php">Change Password</a></li>
						<a href="changepp.php">Change Profile Picture</a></li>
					   <a href="logouthandler.php">Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
				</tr>
			
	<td class=" categ"  valign="top"  width="8px">
	<label><b class="left-category">User</b></label><br><hr>
		 <ul>
					<li><a href="search.php">Search</a></li>
					<li><a href="create.php">Create New</a></li>
					</ul>
					<hr>
					<label><b>Products</b></label><br><hr>
					<ul?>
					<li><a href="pending.php">Orders</a></li>
					<li><a href="allProducts.php">All Products</a></li>
					<li><a href="settings.php">Add Product</a></li>
					<li><a href="todays_offer.php"></a></li><br>
	</ul>
	
	
	</td>
	<td></td>
	
	</td>
	
			<td valign="top" height="400" align="center">
			<div class="profile-container">
    <div class="profile-section">
        <div class="profile-header">
            <h3>User Profile</h3>
        </div>
        <div class="profile-details">
            <div class="profile-item">
                <span class="label">Name:</span>
                <span class="value"><?= $_SESSION['user']['name']; ?></span>
            </div>
            <div class="profile-item">
                <span class="label">Email:</span>
                <span class="value"><?= $_SESSION['user']['email']; ?></span>
            </div>
            <div class="profile-item">
                <span class="label">Gender:</span>
                <span class="value"><?= $_SESSION['user']['gender']; ?></span>
            </div>
            <div class="profile-item">
                <span class="label">Date of Birth:</span>
                <span class="value"><?= $_SESSION['user']['dob']; ?></span>
            </div>
            <div class="profile-item">
                <span class="label">Role:</span>
                <span class="value"><?= $_SESSION['user']['usertype']; ?></span>
            </div>
            <div class="profile-item">
                <span class="label">Status:</span>
                <span class="value">Active</span>
            </div>
            <div class="profile-item">
                <span class="label">User Since:</span>
                <span class="value">01/01/2023</span>
            </div>
            <div class="profile-item">
                <span class="label">Last Login:</span>
                <span class="value">1 Day Ago</span>
            </div>
            <div class="profile-item">
                <span class="label">User Image:</span>
                <span class="value">
                    <img src="../res/user/<?= $_SESSION['user']['pp']; ?>" width="100" alt="User Image">
                    <br>
                    <a href="changepp.php">Change</a>
                </span>
            </div>
        </div>
        <div class="profile-actions">
            <a href="editprofile.php">Edit Profile</a>
            <a href="loggedin.php">Home</a>
        </div>
    </div>
</div>

</body>
</html>