<?php include "../../data/product_access.php"; ?>
<?php
	session();
?>

<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
    <title>E-SHOP</title>
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

        <table align="center" width="100%">
        <tr></tr>
           
            <tr>
                <th align="center"><label><h3>Orders</h3></label></th>

            </tr>
        </table>

        <table align="left" >
            <tr height="100">
            <td ></td>
            <td>
            <a href="order.php"><input type="submit" value="All Orders" ><br>
            </td>
            <td>
           
            <a href="pending.php"><input type="submit" value="Orders waiting Confirmation" ><br>
            </td>
            </tr>
            <tr >
            <td ></td>
                <td width="35%">
                   <br><br> <img src="pictures/.PNG" height="100" width="100">
                </td>
                <td width="35%">
                    <br> Order Id : <br><br> Tracking Number : <br><br>
                     
                </td>
                

            </tr>
            <tr></tr>
            <td></td>
            <tr align="right">
             <td></td>
            
            <td><br><br><br><br>Status : </td>

                
            </tr>
           
        </table>

    </td>



    <tr height="100">
        <th colspan="2">
            <a href="aboutus.php">Return and Refund policy</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <a href="help.php">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
        </th>
    </tr>






</table>


</html>