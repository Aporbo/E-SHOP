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
<link rel="stylesheet" href="css/changepass.css">
<link rel="stylesheet" href="css/profile.css">

	<title>Change Password</title>
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
				<br>
				
				
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
            <li><a href="settings.php">Add Product</a></li>
			</td>
			<td valign="top" height="400">
			<br/>
<br />
<fieldset style="border: 2px solid #007bff; border-radius: 8px; max-width: 500px; margin: 20px auto; padding: 20px;">
    <legend style="font-size: 1.5em; font-weight: bold; color: #007bff;">CHANGE PASSWORD</legend>
    <br/>
    <form method="post" novalidate>
        <div style="margin-bottom: 10px;">
            <label for="cpassword" style="text-align: right; padding-right: 10px;"><font size="3">Current Password</font>:</label>
            <input type="password" name="cpassword" style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        <hr/>
        <div style="margin-bottom: 10px;">
            <label for="npassword" style="text-align: right; padding-right: 10px; color: green;"><font size="3">New Password</font>:</label>
            <input type="password" name="npassword" style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        <hr/>
        <div style="margin-bottom: 10px;">
            <label for="rpassword" style="text-align: right; padding-right: 10px; color: red;"><font size="3">Retype New Password</font>:</label>
            <input type="password" name="rpassword" style="width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        <hr/>
        <div style="margin-bottom: 20px;">
            <input type="submit" value="Update" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; cursor: pointer; border-radius: 4px;">
            <a href="loggedin.php" style="padding: 10px 20px; background-color: transparent; color: #007bff; text-decoration: none; border: none; cursor: pointer; border-radius: 4px;">Home</a>
        </div>
    </form>
</fieldset>

			</td>
		</tr>
		
	</table>
</body>

</html>
<?php
	
	if($_SERVER["REQUEST_METHOD"]=='POST'){
		
			$username=$_SESSION['user']['username'];
			$cpassword=$_REQUEST['cpassword'];
			$npassword=$_REQUEST['npassword'];
			$rpassword=$_REQUEST['rpassword'];
			
			 include "../../data/user_access.php";
			if(($cpassword==$_SESSION['user']['password'])&&($npassword==$rpassword))
			{ 
			 $result=updateUser_pass($username,$rpassword);
			 $_SESSION['user']['password']=$rpassword;
			 
			 echo "<script>
                    alert('Password Updated');
                    
                 </script>";
	
			}
			else
			{
				 echo "<script>
                    alert('Password Not Updated. Cheak current password/retype password');
                    
                 </script>";
				 
				
			}

		}		
?>
