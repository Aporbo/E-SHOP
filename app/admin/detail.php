<?php include "../../data/admin_user_service.php"; ?>
<?php include "../../data/session_service.php"; ?>
<?php
	session();
        $username = $_GET['un'];
        $User = getUsersByUserName($username);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
<link rel="stylesheet" href="css/loggedin.css">
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/detail.css">

	<title>Search</title>
</head>
<body width="1600">
	<table width="1600" border="1" align="center" cellpadding="0" cellspacing="0">
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
		<tr>
			<td width="200" valign="top">
				
				<hr>
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User</span><br>
				<hr>
				<ul>
					<li><a href="search.php">Search</a></li>
					<li><a href="create.php">Create New</a></li>
				</ul>
				<hr>
				
				
        <hr>
        <ul>
            Products
            <hr>
			<li><a href="pending.php">Orders</a></li>
            <li><a href="allProducts.php">All Products</a></li>
            <li><a href="settings.php">Add Products</a></li>
			</td>
			<td valign="top" height="400" >
            <div class="user-detail">
        <div class="header">
            <h2>USER | DETAIL</h2>
        </div>
        <div class="content">
            <div class="user-info">
            <div class="user-image">
                    <img width="128" src="../res/user/<?= $User['pp']; ?>"/>
                </div>
                <span class="label">User Name:</span>
                <span class="value"><?= $User['username']; ?></span>
            </div>
            <hr />
            <div class="user-info">
                <span class="label">Name:</span>
                <span class="value"><?= $User['name']; ?></span>
                
            </div>
            <hr />
            <div class="user-info">
                <span class="label">Email:</span>
                <span class="value"><?= $User['email']; ?></span>
            </div>
            <hr />
            <div class="user-info">
                <span class="label">Gender:</span>
                <span class="value"><?= $User['gender']; ?></span>
            </div>
            <hr />
            <div class="user-info">
                <span class="label">Date of Birth:</span>
                <span class="value"><?= $User['dob']; ?></span>
            </div>
            <hr />
            <div class="user-info">
                <span class="label">Address:</span>
                <span class="value"><?= $User['address']; ?></span>
            </div>
            <hr />
            <div class="user-info">
                <span class="label">Role:</span>
                <span class="value"><?= $User['usertype']; ?></span>
            </div>
            <hr />
            <div class="user-info">
                <span class="label">Status:</span>
                <span class="value"><?= $User['status']; ?></span>
            </div>
            <hr />
            <div class="user-info">
                <span class="label">User Since:</span>
                <span class="value"><?= $User['regdate']; ?></span>
            </div>
        </div>
        <hr />
        <div class="actions">
            <a href="edit.php?un=<?= $User['username']; ?>" class="btn edit-btn">Edit</a>
            <a href="delete.php?un=<?= $User['username']; ?>" class="btn delete-btn">Delete</a>
            <a href="search.php" class="btn back-btn">Back to Search</a>
        </div>
    </div>
			</td>
		</tr>
		
	</table>
</body>
</html>
