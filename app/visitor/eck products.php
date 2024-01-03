<?php include "../../data/product_access.php"; ?>
<?php

    $pnamee =$_GET['pname'];
    $productnames = getProductByNameElectronics($pnamee);
	
?>

<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>male person ditels</title>
</head>

	<table align="center" width="1600" >
	<tr><th colspan="3" align="right" width="60%">
        <a href="home.php"><img src="pictures\esop.png" align="left" align="top" width="20%" ></a>
				<br>
				<br>
		
				 <a href="../account/login.php">Login</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<a href="../account/login.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
			
			</tr>
		
		<td  valign="top"  width="10%">
		<label><b><a href="home.php">Home</a></b></label><br><hr>
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
		
			</ul>
		</td>
			
			<td valign="top" width="40%" >
			
					<table align="center" width="100%" >
						<tr>
							
						<a href="select persons male.php"><img src="pictures\men.jpg" align="left" align="top" width="15%" margin= "5px" height="100" ></a>
							
							<a href="select persons female.php"><img src="pictures\female1.jpg" align="left" align="top" width="15%" margin= "5px" height="100" ></a>
							
							<a href="accessories.php"> <img src="pictures\accessories.jpeg" align="left" align="top" width="15%" margin= "5px" height="100" ></a>
							<a href="electronics.php"> <img src="pictures\electro.png" align="left" align="top" width="15%" margin= "5px" height="100" ></a>					
						</tr>
					 </table>			
			
					
					
					<table align="left" width="100%" >
					  <?php foreach ($productnames as $productn) { ?>
						<tr>
							<td>
							<a href="showdetail.php?id=<?=$productn['code']?>"><img src="pictures\<?=$productn['pdpic'] ;?>" align="left" align="top" width="20%" height="100" ><br><h4><?=$productn['name']; ?> <br><?=$productn['sprice'] ;?></h4></a>	<br><br><br><br><br><br>
							</td>
						</tr>

						 <?php } ?>																												
						
				
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