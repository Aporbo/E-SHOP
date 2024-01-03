<?php include "../../data/product_access.php"; ?>
<?php
	session();
?>
<?php
  
        
        $order= allorders();
    
    
?>
<style>
<?php include "css/home.css"; ?>
</style>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Orders</title>
</head>
<table align="center" width="1600" >
		
	<tr>
		<th colspan="4" align="center" width="60%">
			<nav>
				<a href="home.php"><img src="pictures\eshop_logo.png" align="left" align="top" width="20%"></a>
				<div class="search-bar">
					<input type="text" class="search-input" placeholder="Search...">
					<button class="search-button">Search</button>
				</div>
				
				Login as <a href="../account/profile.php"><?= $_SESSION['user']['name']; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="logouthandler.php">Logout</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<a href="order.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
				<div class="dropdown">
        <div class="dropdown-content">
            <div class="sidebar">
                <ul>
                 <a href="home.php">Home</a></li>
                   <a href="../account/profile.php">View profile</a></li>
                   <a href="order.php">My Orders</a></li>
                    <a href="../account/editprofile.php">Settings</a>
                    <a href="../account/changepass.php">Change Password</a></li>
                    <a href="../account/changepp.php">Change Profile Picture</a></li>
                   <a href="logouthandler.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
			</tr>
		
<td class=" categ"  valign="top"  width="8px">
<label><b class="left-category">Catagories</b></label><br><hr>
	<ul>
	<a class="intro" href="select persons male.php">Men's Product</a><hr>
	<li><a href="spm products.php?pname=Shirt">Men's Shirts</a></li>
	<li><a href="spm products.php?pname=Pant">Men's Pants</a></li>
	<li><a href="spm products.php?pname=Shoe">Men's Shoes</a></li>
	<li><a href="spm products.php?pname=Belt">Belt</a></li><br>
	<a class="intro" href="select persons female.php">Women's Product</a><hr>
	<li><a href="spf products.php?pname=Dress">Dresses</a></li>
	<li><a href="spf products.php?pname=Pant">Pants</a></li>
	<li><a href="spf products.php?pname=Shoe">Shoes</a></li>
	<li><a href="spf products.php?pname=Bags">Bags</a></li><br>
	
	<a class="intro" href="accessories.php">Accessories</a><hr>
	<li><a href="ack products.php?pname=Wallet">Wallet</a></li>
	<li><a href="ack products.php?pname=Bag">Bags</a></li>
	<li><a href="ack products.php?pname=BackCover">Backcovers</a></li>
	<li><a href="ack products.php?pname=HandBand">Handsbands</a></li><br>
	<a class="intro" href="electronics.php">Electronics</a><hr>
	
	<li><a href="eck products.php?pname=TableFan">Table Fans</a></li>
	<li><a href="eck products.php?pname=HeadPhone">Headphones</a></li>
	<li><a href="eck products.php?pname=Smart Watch">Smart Watches</a></li><br>
	</ul>



</td>
<td></td>

</td>


		
		

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
                <a href="order.php"><input type="submit" value="All Orders" ><br></a>
            </td>
            <td width="250"></td>
          
            <td width="150"></td>
            <td>
                <a href="pending.php"><input type="submit" value="Orders waiting Confirmation" ><br></a>
            </td>
            </tr>
            <tr >
            <td ></td>
                
                <table align="left" width="100%" >
                   <?php if(isset($order)){ ?>
                    <?php foreach ($order as $productn) { ?>
                    <tr>
                        <td>
                            <img src="pictures\<?=$productn['ppic'] ;?>" align="left" align="top" width="10%" height="100" ><br><h4>Product Name :<?=$productn['pname']; ?> <br>Price :<?=$productn['cost'] ;?><br>Quantity :<?=$productn['quantity'] ;?><br>Track:Number :<?=$productn['tracknumber'] ;?></h4>
                            </td>
                            
                        </tr>
                    <?php } ?> 
                    <?php } ?> 
                    </table>
                
            </tr>
        </table>

    </td>


    </tr>
    <div class="footer">
        <a href="aboutus.php">Return and Refund policy</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="help.php">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
   
  
</table>


</html>