<?php include "../../data/product_access_admin.php"; ?>
<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>
<?php
        $productid = $_GET['cd'];
        if($_SERVER['REQUEST_METHOD']=="POST"){
        if(deleteProductByCode($productid)==true){
            echo "<script>
                    alert('Record Deleted');
                    document.location='allProducts.php';
                 </script>";
            die();
        }
    }
        $allproduct = getAllProductByCode($productid);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
<link rel="stylesheet" href="css/loggedin.css">
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/productdelete.css">

    <title>Add Products</title>
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
                   <form method="POST" novalidate>
                    <tr>
                        <th align="center"><label>
                        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product Delete&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            </h3>
                            </label>
                        </th>

                    </tr>
                    </form>
                </table>
                <br>
                 <fi<legend class="custom-legend"><b>Product | DELETE | <h3 style="color: red;">Are You Sure?</h3></b></legend>
    <table class="custom-delete-table" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td width="100"></td>
            <td width="10"></td>
            <td width="230"></td>
            <td></td>
        </tr>
        <?php foreach ($allproduct as $product) { ?>
            <tr>
                <td>Product Code</td>
                <td>:</td>
                <td><?= $product['code']; ?></td>
            </tr>
            <tr>
                <td>Description</td>
                <td>:</td>
                <td><?= $product['description']; ?></td>
                <td><img src="../res/products/<?= $product['pdpic']; ?>" /></td>
            </tr>
            <tr>
                <td colspan="3"><hr /></td>
            </tr>
            <form method="POST" novalidate>
                <tr>
                    <td colspan="2"><a href="loggedin.php">Home</a></td>
                    <td>
                        <input type="submit" value="Delete" />
                    </td>
                </tr>
            </form>
       
    </table>
                </fieldset>
            </td>
       
         <?php } ?>
    </table>
</body>
</html>