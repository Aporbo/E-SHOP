<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
<link rel="stylesheet" href="css/loggedin.css">
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/create.css">

	<title>Create New</title>
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
			<br/>
<br />
<div class="container">
    <fieldset class="user-create">
        <legend><b>USER | CREATE</b></legend>
        <br/>
        <form method="post" novalidate class="create-form">   
        <div class="create-form">
    <div class="form-row">
        <label for="uname">User Name:</label>
        <input name="uname" type="text" value="" class="input-field">
    </div>
    <hr class="divider">
    
    <div class="form-row">
        <label for="name">Name:</label>
        <input name="name" type="text" value="" class="input-field">
    </div>
    <hr class="divider">
    
    <div class="form-row">
        <label for="pass">Password:</label>
        <input name="pass" type="password" value="" class="input-field">
    </div>
    <hr class="divider">
    
    <div class="form-row">
        <label for="cpass">Confirm Password:</label>
        <input name="cpass" type="password" value="" class="input-field">
    </div>
    <hr class="divider">
    
    <div class="form-row">
        <label for="address">Address:</label>
        <input name="address" type="text" value="" class="input-field">
    </div>
    <hr class="divider">
    
    <div class="form-row">
        <label for="email">Email:</label>
        <input name="email" type="text" value="" class="input-field">
        <abbr title="hint: sample@example.com"><b>i</b></abbr>
    </div>
    <hr class="divider">
    
    <div class="form-row">
        <label>Gender:</label>
        <input name="gender" type="radio" value="male">Male
        <input name="gender" type="radio" value="female">Female
        <input name="gender" type="radio" value="other">Other
    </div>
    <hr class="divider">
    
    <div class="form-row">
        <label for="dob">Date of Birth:</label>
        <input name="dob" type="text" value="" class="input-field">
        <font size="2"><i>(dd/mm/yyyy)</i></font>
    </div>
    <hr class="divider">
    
    <div class="form-row">
        <label for="usertype">Role:</label>
        <select name="usertype" class="select-field">
            <option></option>
            <option value="admin">Admin</option>
            <option value="Delivery Man">Delivery Man</option>
            <option value="user">User</option>
        </select>
    </div>
    <hr class="divider">
    
    <div class="form-row">
        <label for="status">Status:</label>
        <select name="status" class="select-field">
            <option></option>
            <option value="active">Active</option>
            <option value="pending">Pending</option>
            <option value="blocked">Blocked</option>
        </select>
    </div>
</div>
            <hr />
            <input type="submit" value="Create" class="submit-button"/>
            <a href="search.php" class="back-link">Back to Search</a>
        </form>
    </fieldset>
</div>
			
			</td>
		</tr>
		
	</table>
</body>
</html>
<?php



	if($_SERVER["REQUEST_METHOD"]=='POST'){
		
		include_once("../../Data/user_access.php");
		
		$flag=0;

		if($flag!=1){
			$username=$_REQUEST['uname'];
			$name=$_REQUEST['name'];
			$password=$_REQUEST['pass'];
			$email=$_REQUEST['email'];
			$gender=$_REQUEST['gender'];
			$address=$_REQUEST['address'];
			$dob=$_REQUEST['dob'];
			
			$usertype=$_REQUEST['usertype'];
			$status=$_REQUEST['status'];
			
			
			
			if(adduseradmin($username,$name,$password,$email,$gender,$address,$dob,$usertype,$status)==true){
            echo "<script>
                    alert('Registration Completed , Please wait for admin confirmation for login. Thank you ');
                   
                 </script>";
				 die();
					
					
			}else{
				echo "Server issue's try again later";
			}
		}else{
			  echo " <ul> <li>Fix all the Problems And Try Again !! </li></ul>  "; 
		}	 
	}
 
?>
