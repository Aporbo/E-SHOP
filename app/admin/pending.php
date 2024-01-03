<?php include "../../data/product_access.php"; ?>

<?php
  
        
        $order= adminpending();
        session();
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
<link rel="stylesheet" href="css/loggedin.css">
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/pending.css">

    <title>Pending Deliveries</title>
   
</head>
<body width="1600">
    <table width="1600" border="1" align="center" cellpadding="0" cellspacing="0">
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
        <tr>
            <td width="200" valign="top">
                <br>
                
                <hr>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User</span><br>
                <hr>
                <ul>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="create.php">Create New</a></li>
                </ul>
                <hr>
                
                
        <hr>
        <ul>
            Products
            <hr>
			<li><a href="pending.php">Orders</a></li>
            <li><a href="allProducts.php">All Products</a></li>
            
            <li><a href="settings.php">Add Products</a></li>
        </td>
            <td valign="top" height="400" align="center">
                 <table border="1" align="center" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <th align="center"><label><h3>Pending Deliveries</h3></label></th>
                    </tr>
                </table>

        <table align="center" width="100%">
        <tr class="table-header">
    <td class="header-cell">
        <a href="pending.php"><input type="submit" value="Pending Deliveries"></a>
    </td>
    <td class="header-cell">
        <a href="neworders.php"><input type="submit" value="New Orders"></a>
    </td>
</tr>
<table class="order-table" align="center" width="100%">
    <tr class="table-row">
        <td class="table-cell" width="17" align="center">
            <label><h3>Order Image</h3></label>
        </td>
        <td class="table-cell" width="17" align="center">
            <label><h3>Order Info</h3></label>
        </td>
        <td class="table-cell" width="16" align="center">
            <label><h3>Customer</h3></label>
        </td>
        <td class="table-cell" width="17" align="center">
            <label><h3>Track Id</h3></label>
        </td>
    </tr>
    <?php foreach ($order as $productn) { ?>
        <tr class="table-row">
            <td class="table-cell" align="center">
                <img src="pictures\<?=$productn['ppic'];?>" align="center" align="top" width="100" height="100">
            </td>
            <td class="table-cell" align="center">
                Name: <?=$productn['pname']; ?><br>
                Quantity: <?=$productn['quantity']; ?><br>
                Cost: <?=$productn['cost']; ?><br>
                Code: <?=$productn['code']; ?><br>
                Size: <?=$productn['size']; ?><br>
                Color: <?=$productn['colour']; ?><br><br>
            </td>
            <td class="table-cell" align="center">
                <?=$productn['username']; ?>
            </td>
            <td class="table-cell" align="center">
                <?=$productn['tracknumber'];?>
            </td>
        </tr>
    <?php } ?>
</table>

       
    </table>
</body>
