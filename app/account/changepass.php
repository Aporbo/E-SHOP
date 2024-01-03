<?php include "../../data/product_access.php"; ?>
<?php
	session();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
	<title>Change Password</title>
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
					
					Login as <a href="../account/profile.php"><?= $_SESSION['user']['name']; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="../user_pages/logouthandler.php">Logout</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
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
			<td valign="top" height="400">
			<br/>
<br />
<fieldset>
    <legend><b>CHANGE PASSWORD</b></legend>
    <br/>
    <form method="post" novalidate>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="150"></td>
                <td width="10"></td>
                <td width="150"></td>
                <td></td>
            </tr>
            <tr>
                <td><font size="3">Current Password</font></td>
				<td>:</td>
                <td><input type="password" name="cpassword" /></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td><font size="3" color="green">New Password</font></td>
				<td>:</td>
                <td><input type="password" name="npassword" /></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td><font size="3" color="red">Retype New Password</font></td>
				<td>:</td>
                <td><input type="password" name="rpassword" /></td>
                <td></td>
            </tr>
        </table>
        <hr />
        <input type="submit" value="Update" />
        <a href="../user_pages/home.php">Home</a>

</fieldset>

			</td>
		</tr>
		
	</table>
</body>
</form>
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
			  header("location:changepass.php");
			 echo "<script>
                    alert('Password Updated');
                    
                 </script>";
	
			}
			else
			{
				 echo "<script>
                    alert('Password Not Updated. Cheak current password/retype password');
                    
                 </script>";
				  header("location:changepass.php");
				
			}

		}		
?>

