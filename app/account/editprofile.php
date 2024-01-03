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
<html>
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
			<td valign="top" height="400" >
			
			<br/>
<br/>
<form method="post" novalidate>
<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
        <br/>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text" value="<?= $_SESSION['user']['name']; ?>"></td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="text" value="<?= $_SESSION['user']['email']; ?>">
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                </td>
                <td></td>
            </tr>		
		
		    <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td>
                    <input name="address" type="text" value="<?= $_SESSION['user']['address']; ?>">
                    
                </td>
                <td></td>
            </tr>	
	
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>   
					
					<input type="radio" name="gender" value="male" <?php if($_SESSION['user']['gender'] =="male") :?> checked<?php endif; ?> >Male
					<input type="radio" name="gender" value="female" <?php if($_SESSION['user']['gender'] =="female") :?> checked<?php endif; ?>>Female
					<input type="radio" name="gender" value="other"<?php if($_SESSION['user']['gender'] =="other") :?> checked<?php endif; ?>  >Other
					
					
                </td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td valign="top">Date of Birth</td>
                <td valign="top">:</td>
                <td>
                    <input name="dob" type="text" value="<?= $_SESSION['user']['dob']; ?>">
                    <font size="2"><i>(dd/mm/yyyy)</i></font>
                </td>
                <td></td>
            </tr>
        </table>
        <hr/>
			<input type="submit" value="Save">
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
                    document.location='../account/editprofile.php'; 
                 </script>";
			 
			
		}
		
		else{
			echo "Fix All Errors";
		}
	}
		
?>
	
