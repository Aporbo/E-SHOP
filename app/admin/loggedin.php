<?php include "../../data/product_access.php"; ?>
<?php
  
        $catgorymen = discount();
        $offer = todaysoffers();
    
	
?>
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
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
<link rel="stylesheet" href="css/loggedin.css">
<link rel="stylesheet" href="css/profile.css">

	<title>Home</title>
</head>

	<table align="center" width="1600" >
	
		

    <table align="center" width="1600" >
		
	<tr>
		<th colspan="4" align="center" width="60%">
			<nav>
				<a href="loggedin.php"><img src="pictures\eshop_logo.png" align="left" align="top" width="20%"></a>
				<div class="search-bar">
					<input type="text" class="search-input" placeholder="Search...">
					<button class="search-button">Search</button>
				</div>
				
				Login as <a href="profile.php"><?= $_SESSION['user']['name']; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			
				
				
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
		
<td class=" categ"  valign="top"  width="8px">
<label><b class="left-category">User</b></label><br><hr>
	 <ul>
				<li><a href="search.php">Search</a></li>
				<li><a href="create.php">Create New</a></li>
				</ul>
				<hr>
				<label><b>Products</b></label><br><hr>
                <ul?>
				<li><a href="pending.php">Orders</a></li>
                <li><a href="allProducts.php">All Products</a></li>
                <li><a href="settings.php">Add Product</a></li>
</ul>


</td>
<td></td>

</td>



			<td valign="top" width="40%" >
					
					<table align="left" width="100%" >
					<tr>
					<tr><td><br></td></tr>
						<tr>

						

						</td>
						
						</tr>
	
						

						<div class="container">
        <div class="section">
           

            <?php foreach ($catgorymen as $productn) { ?>
                <div class="product">
                    <a href="allProducts.php">
                        <img src="pictures/<?=$productn['pdpic'];?>" alt="<?=$productn['name'];?>" width="50%" height="100">
                        <h4><?=$productn['name']; ?></h4>
                        <p>Discount: <?=$productn['offer'];?></p>
                    </a>
                    <a href="allProducts.php" class="edit-button">Edit</a>
                </div>
            <?php } ?>
        </div>

        <div class="section">
          

            <?php foreach ($offer as $product) { ?>
                <div class="product">
                    <a href="todays_offer.php">
                        <img src="pictures/<?=$product['pdpic'];?>" alt="<?=$product['name'];?>" width="50%" height="100">
                        <h4><?=$product['name']; ?></h4>
                        <p><?=$product['cost'];?></p>
                    </a>
                    <a href="allProducts.php" class="edit-button">Edit</a>
                </div>
				
            <?php } ?>
        </div>
		<div class="more-products">
    <a href="allProducts.php">More Products</a>
</div>
    </div>
	


	</table>


</html>
