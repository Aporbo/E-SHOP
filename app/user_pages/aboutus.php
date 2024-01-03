<?php include "../../data/product_access.php"; ?>
<?php
	session();
?>

<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Return and Refund policy</title>
</head>

	<table align="center" width="1600" >
	
			<tr><th colspan="3" align="right" width="60%">
			<a href="home.php"><img src="pictures\esop.png" align="left" align="top" width="20%"></a>
				<br>
				<br>
		

				Login as <a href="../account/profile.php"><?= $_SESSION['user']['name']; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="logouthandler.php">Logout</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<a href="order.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
			
			</tr>
		<tr>
		<td  valign="top"  width="13%">
		<label><b> Account</b></label><br><hr>
			<ul>
			<li><a href="home.php">Home</a>	</li>
			<li><a href="../account/profile.php">View profile</a>	</li>	
			<li><a href="order.php">My Orders </a></li>
			<li><a href="../account/editprofile.php">Settings</a></li>
			<li><a href="../account/changepass.php">Change Password</a></li>
			<li><a href="../account/changepp.php">Change Profile Picture</a></li>
			<li><a href="logouthandler.php">Logout </a></li>
			</ul>
		<label><b>Catagories</b></label><br><hr>
			<ul>
			<a href="select persons male.php">Men's Product</a><hr>
			<li><a href="spm products.php?pname=Shirt">Men's Shirts</a></li>
			<li><a href="spm products.php?pname=Pant">Men's Pants</a></li>
			<li><a href="spm products.php?pname=Shoe">Men's Shoes</a></li>
			<li><a href="spm products.php?pname=Belt">Belt</a></li><br>
			<a href="select persons female.php">Women's Product</a><hr>
			<li><a href="spf products.php?pname=Dress">Dresses</a></li>
			<li><a href="spf products.php?pname=Pant">Pants</a></li>
			<li><a href="spf products.php?pname=Shoe">Shoes</a></li>
			<li><a href="spf products.php?pname=Bags">Bags</a></li><br>
			
			<a href="accessories.php">Accessories</a><hr>
			<li><a href="ack products.php?pname=Wallet">Wallet</a></li>
			<li><a href="ack products.php?pname=Bag">Bags</a></li>
			<li><a href="ack products.php?pname=BackCover">Backcovers</a></li>
			<li><a href="ack products.php?pname=HandBand">Handsbands</a></li><br>
			<a href="electronics.php">Electronics</a><hr>
			
			<li><a href="eck products.php?pname=TableFan">Table Fans</a></li>
			<li><a href="eck products.php?pname=HeadPhone">Headphones</a></li>
			<li><a href="eck products.php?pname=Smart Watch">Smart Watches</a></li><br>
		</td>
			<td></td>
			<td valign="top" width="40%" >
			
					<table valign="top" width="100%" >
						
						<tr>
							
						<a href="select persons male.php"><img src="pictures\men.jpg" align="left" align="top" width="15%" margin= "5px" height="100" ></a>
							
							<a href="select persons female.php"><img src="pictures\female1.jpg" align="left" align="top" width="15%" margin= "5px" height="100" ></a>
							
							<a href="accessories.php"> <img src="pictures\accessories.jpeg" align="left" align="top" width="15%" margin= "5px" height="100" ></a>
							<a href="electronics.php"> <img src="pictures\electro.png" align="left" align="top" width="15%" margin= "5px" height="100" ></a>						
							
						</tr>
					 </table>	
					<br>
					<br>
					<table align="center" width="100%" >
						<tr  >
                            <th  align="center"><label><h3>Return and Refund policy</h3></label></th>
			
						</tr>
					 </table>
					 
			<table>
				<br>
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, nesciunt blanditiis eos tenetur neque maxime deserunt. Voluptas quasi incidunt ut explicabo quis perferendis, necessitatibus illum cum consequatur architecto pariatur, vero neque qui possimus temporibus, fuga recusandae maxime iusto numquam. Autem adipisci blanditiis eveniet accusantium enim vel dolorum. Ratione veritatis animi aut quas. Sequi dolorum esse est illo totam provident ex, expedita quasi voluptatum repudiandae numquam, saepe nisi corporis voluptates optio excepturi perspiciatis quisquam delectus necessitatibus natus reiciendis temporibus doloremque fugit. Dolores doloribus similique, maiores unde cumque commodi? Voluptas totam perspiciatis ratione. Laborum sint voluptates voluptate voluptatibus illo incidunt vero nulla?
				<br>

			</table>
						
			
			 <tr align="left" height="100">
        <th colspan="2">
            <a href="aboutus.php">Return and Refund policy</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <a href="help.php">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </th>
    </tr>	
		</td>
		
	
	</table>
	
	
	</table>


</html>