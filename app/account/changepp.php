<?php include "../../data/product_access.php"; ?>
<?php
	session();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Edit Profile</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../visitor/CSS/home.css">
</head>
<body width="1600">
<table align="center" width="1600" >
		
		<tr>
			<th colspan="4" align="center" width="60%">
				<nav>
					<a href="../user_pages/home.php"><img src="eshop_logo.png" align="left" align="top" width="20%"></a>
					<div class="search-bar">
						<input type="text" class="search-input" placeholder="Search...">
						<button class="search-button">Search</button>
					</div>
					
					Login as <a href="../account/profile.php"><?= $_SESSION['user']['name']; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="logouthandler.php">Logout</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
					<a href="../user_pages/order.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="../user_pages/cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
					<div class="dropdown">
			
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
		<li><a href="s../user_pages/pf products.php?pname=Dress">Dresses</a></li>
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
			<form method="post" enctype="multipart/form-data" novalidate>
			<td valign="top" height="400" align="center">
				<table>
					<tr>
						<td width="1000">
						<br/>
					
							<fieldset>
								<legend><h3>PROFILE PICTURE</h3></legend>
								<table >
									<tr>
										<td align="center">
											<img src="../res/user/<?= $_SESSION['user']['pp']; ?>" alt="admin"width="150" height="200">
											<br><br>
											<input type="file" name="itempic" accept="image/*" required> 
										</td>
									</tr>
									<tr>
										<td >
											<hr>
											<input type="submit"value="Update"/>
											<a href="../user_pages/home.php">Home</a>
										</td>
									</tr>
								</table>
							</fieldset>
						</td>
					</tr>
				</table>
			</td>
            </form>
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
                    document.location='../account/changepp.php'; 
                 </script>";
			
			
		}else{
			echo "Fix All Errors";
		}
		
		
	


?>

					

