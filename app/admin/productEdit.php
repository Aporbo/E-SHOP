<?php include "../../data/product_access_admin.php"; ?>
<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>
<?php
        $productid = $_GET['cd'];

        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(isset($_POST['pdpicchange']))
            {
                $product['code']=$productid;
                $product['pdpic']=$_POST['pdpic'];
                if(editProductpic($product)==true)
                {
                echo "<script>
                    alert('Pic Updated');
                   document.location='productEdit.php?cd=$productid'; 
                 </script>";
                die();
                }
            }
        if(isset($_POST['update']))
        {
            echo"wen";
        $product['code']=$productid;
        $product['name']=$_POST['name'];
        $product['color']=$_POST['color'];
        $product['material']=$_POST['material'];
        $product['size']=$_POST['size'];
        $product['description']=$_POST['description'];
        $product['bprice']=$_POST['bprice'];
        $product['sprice']=$_POST['sprice'];
        $product['offer']=$_POST['offer'];
        $product['quantity']=$_POST['quantity'];
        
        
       if(editProduct($product)==true)
       {
                echo "<script>
                    alert('Record Updated');
                    document.location='allProducts.php';
                 </script>";
                die();
        }
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
<link rel="stylesheet" href="css/productdetails.css">

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
                   <form method="POST">
                    <tr>
                        <th align="center"><label>
                        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            </h3>
                            </label>
                        </th>

                    </tr>
                    </form>
                </table>
                 <br>
                  <br>
                 <fieldset>
                    <legend><b>Product | EDIT</b></legend>
         <table cellpadding="0" cellspacing="0" width="100%">
         <form method="POST">
        <tr>
            <td width="100"></td>
            <td width="10"></td>
            <td width="230"></td>
            <td></td>
        </tr>
         <?php foreach ($allproduct as $product) { ?>
        <tr>
            <td>Category</td>
            <td>:</td>
            <td><?=$product['catagory'];?></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Sub-Category</td>
            <td>:</td>
            <td><?=$product['subcatagory']?></td>
        </tr>	            
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Product Code</td>
            <td>:</td>
            <td><?=$product['code'];?></td>
        </tr>		
        <tr><td colspan="3"><hr/></td></tr>			
         <tr>
            <td>Product Name</td>
            <td>:</td>
            <td><input type="text" name="name" value="<?=$product['name'];?>" /></td>
        </tr>
        <tr><td colspan="3"><hr/></td></tr>
        <tr>
            <td>Quantity</td>
            <td>:</td>
            <td><input type="text" name="quantity" value="<?=$product['quantity'];?>" /></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Product Color</td>
            <td>:</td>
            <td><input type="text" name="color" value="<?=$product['color'];?>" /></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Buying Price</td>
            <td>:</td>
            <td><input type="text" name="bprice" value="<?=$product['bprice'];?>" /></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Selling Price</td>
            <td>:</td>
            <td><input type="text" name="sprice" value="<?=$product['sprice'];?>" /></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Offer Price(*)</td>
            <td>:</td>
            <td><input type="text" name="offer" value="<?=$product['offer'];?>" /></td>
        </tr>
         <tr><td colspan="3"><hr /></td></tr>
         <tr>
            <td>Product Material</td>
            <td>:</td>
            <td><input type="text" name="material" value="<?=$product['material'];?>" /></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Product Size</td>
            <td>:</td>
            <td><input type="text" name="size" value="<?=$product['size'];?>" /></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Description</td>
            <td>:</td>
            <td><textarea name="description" ><?=$product['description'];?></textarea></td>
            <td><img src="../res/products/<?=$product['pdpic'];?>" />"<br><input type="file" name="pdpic" value="../res/products/<?=$product['pdpic'];?>"><br><br><input type="submit" value="Save" name="pdpicchange" /></td>
        </tr>
         <tr><td colspan="5"><hr /></td></tr>
         <tr>
            <td colspan="2"><a href="loggedin.php">Home</a></td>
             <td></td>
            <td><input type="submit" value="Update" name="update"/></td>
            
            <td></td>
            
        </tr>
        </form>
        
    </table>
                </fieldset>
            </td>
        </tr>
        
         <?php } ?>
    </table>
</body>
</html>