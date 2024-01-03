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
<link rel="stylesheet" href="css/editprofile.css">

	<title>Edit Profile</title>
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
					
					Login as <a href="profile.php"><?= $_SESSION['user']['name']; ?></a> &nbsp;&nbsp;
				
				
					
					
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
			<form method="post" novalidate>
			<td valign="top" height="400" >
			
	
			<form method="post" novalidate>
                <div class="content-container">
                    <div class="edit-profile-section">
                        <fieldset>
                            <legend><b>EDIT PROFILE</b></legend>
                            <label for="name">Name</label>
                            <input name="name" type="text" value="<?= $_SESSION['user']['name']; ?>">

                            <hr/>

                            <label for="email">Email</label>
                            <input name="email" type="text" value="<?= $_SESSION['user']['email']; ?>">
                            <abbr title="hint: sample@example.com"><b>i</b></abbr>

                            <hr/>

                            <label for="address">Address</label>
                            <input name="address" type="text" value="<?= $_SESSION['user']['address']; ?>">

                            <hr/>

                            <label for="gender">Gender</label>
                            <input type="radio" name="gender" value="male"
                                <?php if ($_SESSION['user']['gender'] == "male") : ?> checked <?php endif; ?>>Male
                            <input type="radio" name="gender" value="female"
                                <?php if ($_SESSION['user']['gender'] == "female") : ?> checked <?php endif; ?>>Female
                            <input type="radio" name="gender" value="other"
                                <?php if ($_SESSION['user']['gender'] == "other") : ?> checked <?php endif; ?>>Other

                            <hr/>

                            <label for="dob">Date of Birth</label>
                            <input name="dob" type="text" value="<?= $_SESSION['user']['dob']; ?>">
                            <font size="2"><i>(dd/mm/yyyy)</i></font>

                            <hr/>
                            <input type="submit" value="Save">
                            <a href="loggedin.php">Home</a>
                        </fieldset>
                    </div>
                </div>
            </form>
			</td>
			</form>
		</tr>
		
	</table>
</body>
</html>
<?php
	
	if($_SERVER["REQUEST_METHOD"]=='POST'){
		$flag=0;
		
		if(str_word_count($_REQUEST['name']<2)){
			echo "Name must contain 2 words";
			$flag=1;
		}

		if(!isset($_REQUEST['address'])){
			$flag=1;
			echo "Address must not be empty";
		}	
		if(!isset($_REQUEST['dob'])){
			$flag=1;
			echo "Date of Birth must not be empty";
		}	
		
		if($flag!=1){
			$username=$_SESSION['user']['username'];
			$name=$_REQUEST['name'];
			$email=$_REQUEST['email'];
			$gender=$_REQUEST['gender'];
			$dob=$_REQUEST['dob'];
			$add=$_REQUEST['address'];
			
			 include "../../data/user_access.php";
			 $result=updateUser($username,$name,$email,$gender,$dob,$add);
			 $_SESSION['user']=$result;
			 var_dump($_SESSION['user']);
			 echo "<script>
                    window.alert('Edit Successfully');
                    document.location='editprofile.php'; 
                 </script>";
			 
			
		}
		
		else{
			echo "Fix All Errors";
		}
	}
		
?>




