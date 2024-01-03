<?php include "../../data/product_access_admin.php"; ?>
<?php include "../../data/session_service.php"; ?>
<?php
	session();
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
           
        $searchKey = $_POST['search']; 
        $searchfilter = $_REQUEST['filter'];
        if($searchfilter == "any")
        {
            $allproduct = getAllProduct();
        }
        else if($searchfilter == "catagory")
        {
            $allproduct = getAllProductByCatagory($searchKey);
        }
         else if($searchfilter == "subcatagory")
        {
            $allproduct = getAllProductBySubCatagory($searchKey);
        }
         else if($searchfilter == "name")
        {
            $allproduct = getAllProductByName($searchKey);
        }
        else if($searchfilter == "offer")
        {
            $allproduct = getAllProductByOfferWithParameter($searchKey);
                
        }
        else if($searchfilter == "code")
         {
             $allproduct = getAllProductByCode($searchKey);
            if (count($allproduct) == 0)
            {
                 echo "<script>
                    alert('No Product Found');
                     document.location='allProducts.php';
                 </script>";
            die();
            } 
                
            
         }
    } 
    else 
    {
         $allproduct = getAllProduct();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
<link rel="stylesheet" href="css/loggedin.css">
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/allproducts.css">

	<title>All Products</title>
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
          
<table class="product-table" align="left" width="100%">
    <form method="POST" novalidate class="filter-form">
        <br/>
        <tr class="filter-row">
            <h3>
                Filter By : 
                <select name="filter" class="filter-select">
                    <option value="any">Any</option>
                    <option value="catagory">Category</option>
                    <option value="subcatagory">Sub-Category</option>
                    <option value="name">Name</option>
                    <option value="code">Code</option>
                </select>
                <input type="text" name="search" placeholder="Enter keyword Here...." class="filter-input">
                <input type="submit" value="Search" class="filter-button">
            </h3>
        </tr>
    </form>
    <tr class="table-header">
        <td width="12" align="center">
            <h3>Image</h3>
        </td>
        <td width="10%" align="center">
            <h3>Category</h3>
        </td>
        <td width="11%" align="center">
            <h3>Sub-Category</h3>
        </td>
        <td width="11" align="center">
            <h3>Name</h3>
        </td>
        <td width="10%" align="center">
            <h3>Code</h3>
        </td>
        <td width="10%" align="center">
            <h3>Buying Price</h3>
        </td>
        <td width="10%" align="center">
            <h3>Selling Price</h3>
        </td>
        <td width="16%" align="center">
        </td>
    </tr>
    <?php foreach ($allproduct as $product) { ?>
    <tr class="product-row">
        <td align="center">
            <img src="../res/products/<?=$product['pdpic']?>" align="center" width="45%" height="25%">
        </td>           
        <td align="center">
            <h3><?=$product['catagory']?></h3>
        </td>
        <td align="center">
            <h3><?=$product['subcatagory']?></h3>
        </td>
        <td align="center">
            <h3><?=$product['name']?></h3>
        </td>
        <td align="center">
            <h3><?=$product['code']?></h3>
        </td>
        <td align="center">
            <h3><?=$product['bprice']?></h3>
        </td>
        <td align="center">
            <h3><?=$product['sprice']?></h3>
        </td>
        <td align="center">
            <a href="productDetails.php?cd=<?=$product['code']?>"><button class="detail-button">Detail</button></a>
            <a href="productEdit.php?cd=<?=$product['code']?>"><button class="edit-button">Edit</button></a>
            <a href="productDelete.php?cd=<?=$product['code']?>"><button class="delete-button">Delete</button></a>
        </td>
    </tr>
    <?php } ?>
</table>
			
        </table>
        </td>
		</tr>
		
	</table>
</body>
<script>
	function function1()
{

window.alert ("Updated");
}
	
	</script>
</html>