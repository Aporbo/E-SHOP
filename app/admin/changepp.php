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
<link rel="stylesheet" href="css/changepp.css">

	<title>Profile Picture Change</title>
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
			<td valign="top" height="400" align="center">
				<table>
					<tr>
					<form method="post" enctype="multipart/form-data" novalidate>
						<td width="1000">
						<br/>
						<fieldset class="profile-picture">
        <legend><h3>PROFILE PICTURE</h3></legend>
        <table>
            <tr>
                <td align="center">
                    <div class="image-container">
                        <img src="../res/user/<?= $_SESSION['user']['pp']; ?>" alt="admin" class="profile-image">
                    </div>
                    <label for="itempic" class="file-label">Choose a new profile picture</label>
                    <input type="file" name="itempic" id="itempic" accept="image/*" required>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                    <input type="submit" value="Update" class="update-button">
                    <a href="loggedin.php" class="home-link">Home</a>
                </td>
            </tr>
        </table>
    </fieldset>

						</td>
					</form>
					</tr>
				</table>
			</td>
		</tr>
		
	</table>
</body>

</html>
<?php

	if($_SERVER["REQUEST_METHOD"]=='POST'){
			
		
			include "../../data/user_access.php";
			$uname=$_SESSION['user']['username'];
		
			
			$itempic=$_FILES['itempic']['name'];
			var_dump($itempic);
			
			$target = "../res/user/".basename($_FILES['itempic']['name']);
			
			if(move_uploaded_file($_FILES['itempic']['tmp_name'],$target)) {
					echo "Image uploaded successfully";
			}else{
					echo "Failed to upload image";
			}
			
			$result=updateUser_pic($uname,$itempic);
			$_SESSION['user']=$result;
		
			 echo "<script>
                    window.alert('Profile picture uploaded Successfully');
                    document.location='changepp.php'; 
                 </script>";
			
			
		}else{
			echo "";
		}
		
		
	


?>