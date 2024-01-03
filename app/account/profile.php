<?php
	session_start();
	if(isset($_SESSION['user'])==false){
		header("location:../account/login.php");
	}
		if(isset($_SESSION['user'])==true)
	{
		if($_SESSION['user']['usertype']!="user")
		{
				header("location:../account/login.php");
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Profile</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../visitor/CSS/home.css">
</head>
<body width="1600">
<table align="center" width="1600" >
		
		<tr>
			<th colspan="4" align="center" width="60%">
				<nav>
					<a href="home.php"><img src="eshop_logo.png" align="left" align="top" width="20%"></a>
					<div class="search-bar">
						<input type="text" class="search-input" placeholder="Search...">
						<button class="search-button">Search</button>
					</div>
					
					Login as <a href="../account/profile.php"><?= $_SESSION['user']['name']; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="../user_pages/logouthandler.php">Logout</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
					<a href="../user_pages/order.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="../user_pages/cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
		
				<div class="sidebar">
					<ul>
					 <a href="../user_pages/home.php">Home</a></li>
					   <a href="../account/profile.php">View profile</a></li>
					   <a href="../user_pages/order.php">My Orders</a></li>
						<a href="../account/editprofile.php">Settings</a>
						<a href="../account/changepass.php">Change Password</a></li>
						<a href="../account/changepp.php">Change Profile Picture</a></li>
					   <a href="../user_pages/logouthandler.php">Logout</a></li>
					</ul>
				</div>
			
				</tr>
			
	<td class=" categ"  valign="top"  width="8px">
	<label><b class="left-category">Catagories</b></label><br><hr>
		<ul>
		<a class="intro" href="../user_pages/select persons male.php">Men's Product</a><hr>
		<li><a href="../user_pages/spm products.php?pname=Shirt">Men's Shirts</a></li>
		<li><a href="../user_pages/spm products.php?pname=Pant">Men's Pants</a></li>
		<li><a href="../user_pages/spm products.php?pname=Shoe">Men's Shoes</a></li>
		<li><a href="../user_pages/spm products.php?pname=Belt">Belt</a></li><br>
		<a class="intro" href="../user_pages/select persons female.php">Women's Product</a><hr>
		<li><a href="../user_pages/spf products.php?pname=Dress">Dresses</a></li>
		<li><a href="../user_pages/spf products.php?pname=Pant">Pants</a></li>
		<li><a href="../user_pages/spf products.php?pname=Shoe">Shoes</a></li>
		<li><a href="../user_pages/spf products.php?pname=Bags">Bags</a></li><br>
		
		<a class="intro" href="../user_pages/accessories.php">Accessories</a><hr>
		<li><a href="../user_pages/ack products.php?pname=Wallet">Wallet</a></li>
		<li><a href="../user_pages/ack products.php?pname=Bag">Bags</a></li>
		<li><a href="../user_pages/ack products.php?pname=BackCover">Backcovers</a></li>
		<li><a href="../user_pages/ack products.php?pname=HandBand">Handsbands</a></li><br>
		<a class="intro" href="../user_pages/electronics.php">Electronics</a><hr>
		
		<li><a href="../user_pages/eck products.php?pname=TableFan">Table Fans</a></li>
		<li><a href="../user_pages/eck products.php?pname=HeadPhone">Headphones</a></li>
		<li><a href="../user_pages/eck products.php?pname=Smart Watch">Smart Watches</a></li><br>
		</ul>
	
	
	
	</td>
	<td></td>
	
	</td>
			<td valign="top" height="400" align="center">
				<table>
					<tr>
						<td>
							<fieldset>
								<legend><h3>PROFILE</h3></legend>
								<table cellpadding="0" cellspacing="0" width="950">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><?= $_SESSION['user']['name']; ?></td>
                <td rowspan="7" align="center">
					<img width="150" src="../res/user/<?= $_SESSION['user']['pp'];  ?>"/> 
                    <br/>
                    <a href="changepp.php">Change</a>
                </td>
            </tr>		
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?= $_SESSION['user']['email']; ?></td>
            </tr>		
            <tr><td colspan="3"><hr/></td></tr>			
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td><?= $_SESSION['user']['gender']; ?></td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Date of Birth</td>
                <td>:</td>
                <td><?= $_SESSION['user']['dob']; ?></td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Role</td>
                <td>:</td>
                <td><?= $_SESSION['user']['usertype']; ?></td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>Active</td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>User Since</td>
                <td>:</td>
                <td>01/01/2023</td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Last Login</td>
                <td>:</td>
                <td>1 Days Ago</td>
            </tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
                <td>Address </td>
                <td>:</td>
                <td><?= $_SESSION['user']['address']; ?></td>
			</tr>

        </table>
        <hr/>
        <a href="editprofile.php">Edit Profile</a>
        <a href="../user_pages/home.php">Home</a>
							</fieldset>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
	</table>
</body>
</html>