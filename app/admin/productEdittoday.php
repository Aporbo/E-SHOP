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
                if(editProductpicToday($product)==true)
                {
                echo "<script>
                    alert('Pic Updated');
                   document.location='productEdittoday.php?cd=$productid'; 
                 </script>";
                die();
                }
            }
        if(isset($_POST['update']))
        {
        $product['code']=$productid;
        $product['name']=$_POST['name'];
        $product['color']=$_POST['color'];
        $product['material']=$_POST['material'];
        $product['size']=$_POST['size'];
        $product['description']=$_POST['description'];
        $product['bprice']=$_POST['bprice'];
        $product['cost']=$_POST['cost'];
        $product['offer']=$_POST['offer'];
        $product['quantity']=$_POST['quantity'];
        
        
       if(editProductToday($product)==true)
       {
                echo "<script>
                    alert('Record Updated');
                    document.location='todays_offer.php';
                 </script>";
                die();
        }
        }
        
       
    }
        $allproduct = getAllProductByCodeToday($productid);
        

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Add Products</title>
</head>

<body width="1600">
    <table width="1600" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="2">
                <table border="0">
                    <tr align="center">
                        <td width="230" height="100">
                            <a href="loggedin.php"><img src="../res/common/esop.PNG" alt="Eshop" width="200"></a>
                        </td>
                        <td width="630"></td>
                        <td>
                            <span>Logged in as <a href="profile.php"><?= $_SESSION['user']['name']; ?></a></span> &nbsp;&nbsp; | &nbsp;&nbsp;
                            <a href="logouthandler.php">Logout</a>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="200" valign="top">
                <br>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</span>

                <table>
                    <tr>
                        <td width="200">
                            <hr>
                        </td>
                    </tr>
                </table>
                <ul>
                    <li><a href="loggedin.php">Home</a></li>
                    <li><a href="profile.php">View Profile</a></li>
                    <li><a href="editprofile.php">Edit Profile</a></li>
                    <li><a href="changepp.php">Change Profile Picture</a></li>
                    <li><a href="changepass.php">Change Password</a></li>
                    <li><a href="logouthandler.php">Logout</a></li>
                </ul>
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
					<li><a href="orders.php">Orders</a></li>
                    <li><a href="allProducts.php">All Products</a></li>
                    <li><a href="settings.php">Add Products</a></li>\
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
                  
                 <fieldset>
                    <legend><b>Product Todays| EDIT</b></legend>
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
            <td><input type="text" name="cost" value="<?=$product['cost'];?>" /></td>
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
            <td><img src="../res/products/<?=$product['pdpic'];?>" width="200" height="200" />"<br><input type="file" name="pdpic" value="../res/products/<?=$product['pdpic'];?>"><br><br><input type="submit" value="Save" name="pdpicchange" /></td>
        </tr>
         <tr><td colspan="5"><hr /></td></tr>
         <tr>
            <td colspan="2"><a href="loggedin.php">Home</a></td>
             <td></td>
            <td><input type="submit" value="Update" name="update"/></td>
            <td><a href="Dashboard.php">Dashboard</a></td>
            <td></td>
            
        </tr>
        </form>
        
    </table>
                </fieldset>
            </td>
        </tr>
       
        </tr>
         <?php } ?>
    </table>
</body>
</html>