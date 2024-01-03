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
     

                   $cookie_name = 'item1'; 
                   unset($_COOKIE[$cookie_name]);
                    setcookie($cookie_name, '', time() - 3600);
?>


<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
<link rel="stylesheet" href="css/deliver.css">
    <title>Delevary Address</title>
</head>

<table align="center" width="1600" >
		
		<tr>
			<th colspan="4" align="center" width="60%">
				<nav>
					<a href="../user_pages/home.php"><img src="pictures/eshop_logo.png" align="left" align="top" width="20%"></a>
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

    <td valign="top" width="40%">

        <table  align="center" width="100%">
           
            <tr>
                <th align="center"><label><h3>Address</h3></label></th>

            </tr>
        </table>
		form>
        <fieldset>
            <legend><h3>Address</h3></legend>

            <table>
                <tr>
                    <td>
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" value="<?= $_SESSION['user']['address']; ?>"/>
                    </td>
                </tr>

                <tr>
                    <td>
					<a class="button" href="payment.php?ad=<?=$_SESSION['user']['address']; ?>"><input type="submit" value="Forward"></a>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form><



    </td>





</table>
<script>
	function function1()
{

window.alert ("product purchesed");
}
	
	</script>

</html>