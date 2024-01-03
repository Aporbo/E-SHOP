<?php include "../../data/product_access_admin.php"; ?>
<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>
<?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
        $product['catagory']=$_POST['catagory'];
        $product['subcatagory']=$_POST['subcatagory'];
        $product['code']=$_POST['code'];
        $product['name']=$_POST['name'];
        $product['color']=$_POST['color'];
        $product['material']=$_POST['material'];
        $product['size']=$_POST['size'];
        $product['description']=$_POST['description'];
        $product['bprice']=$_POST['bprice'];
        $product['sprice']=$_POST['sprice'];
        $product['quantity']=$_POST['quantity'];
        $product['pdpic'] = $_FILES['pdpic']['name'];
        
        $targetFolder = "../res/products/";
        $targetPath = $targetFolder . basename($_FILES['pdpic']['name']);
        
        if (move_uploaded_file($_FILES['pdpic']['tmp_name'], $targetPath)) {
            // File uploaded successfully
        } else {
            // Error uploading file
        }
        
        if(AddProduct($product)==true){
            echo "<script>
                    alert('Record Added');
                    document.location='allProducts.php';
                 </script>";
            die();
        }
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
<link rel="stylesheet" href="css/settings.css">
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
					<li><a href="orders.php">Orders</a></li>
                    <li><a href="allProducts.php">All Products</a></li>
                    <li><a href="settings.php">Add Products</a></li>
            </td>
            <td valign="top" height="400" align="center">
            <table class="custom-table" border="1" align="center" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <th align="center">
                <label>
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Settings&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                </label>
            </th>
        </tr>
    </table>
    <br>
    <br>
    <form method="POST" enctype="multipart/form-data">
        <fieldset align="left">
            <legend><b>Product | ADD</b></legend>
            <table class="custom-table" align="left" width="100%">
                <br />
                <tr height="30">
                    <td>
                        Date : <input type="text" id="date" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>
                            Category :
                            <select name="catagory">
                                <option></option>
                                <option value="men">Men</option>
                                <option value="women">Women</option>
                                <option value="accesories">Accessories</option>
                                <option value="electronic">Electronic</option>
                            </select>
                        </h3>
                    </td>
                    <td>
                        <h3>
                            Sub-Category :
                            <select name="subcatagory">
                                <option value="shirt"></option>
                                <option value="pant">Pant</option>
                                <option value="Shoes">Shoe</option>
                                <option value="tshirt">T-shirt</option>
                                <option value="shirt">Phone</option>
                                <option value="pant">Computer</option>
                                <option value="Shoes">Electronic</option>
                                <option value="tshirt">Wireless</option>
                            </select>
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        <h3>
                            Product Name :
                            <input type="text" name="name" placeholder="Enter Name Here....">
                        </h3>
                    </td>
                    <td width="50%">
                        <h3>
                            Buying Price :
                            <input type="text" name="bprice" placeholder="Enter Buying Price Here....">
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>
                            Code :
                            <input type="text" name="code" placeholder="Enter Code No. of the Product Here....">
                        </h3>
                    </td>
                    <td>
                        <h3>
                            Selling Price :
                            <input type="text" name="sprice" placeholder="Enter Selling Price Here....">
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>
                            Color :
                            <select name="color">
                                <option></option>
                                <option value="red">Red</option>
                                <option value="green">Green</option>
                                <option value="blue">Blue</option>
                                <option value="yellow">Yellow</option>
                                <option value="pink">Pink</option>
                                <option value="black">Black</option>
                                <option value="white">White</option>
                                <option value="magenta">Magenta</option>
                                <option value="grey">Grey</option>
                            </select>
                        </h3>
                    </td>
                    <td>
                        <h3>
                            Product Quantity :
                            <input type="text" name="quantity" placeholder="Enter Product Quantity Here....">
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Product Image: 
                        <img src="../res/products/upload_image.jpg" height="100%" width="80%"><br>
                        
                        <input type="file" name="pdpic"><br><br>
                        </h3>
                        
                    </td>
                    <td>
                        <textarea name="description" rows="19" cols="60" placeholder="Details About The Product"></textarea>
                    </td>
                </tr>
                <tr height="20">

                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Add Product" class="custom-btn" />
                    </td>
                    <td>
                        <input type="reset" value="Clear Fields" class="custom-btn" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>
                        <a href="allProducts.php" class="custom-link">All Products</a>
                    </td>
                    <td>
                        <a href="loggedin.php" class="custom-link">Home</a>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

            </td>
        </tr>
       
    </table>
</body>
<script>
function add() {
    window.alert ("Product Added Successfully");
    var a = document.getElementsByTagName("fieldset")[0];
    a.innerHTML = "Product Added Successfully";
    dateToday();
    
}
    
    

    function clear() {
    window.alert ("All Field Clear");
    var a = document.getElementsByTagName("fieldset")[0];
    a.innerHTML = "All Field Clear";
    
    
}
    function dateToday()
    {
        var a = document.getElementsById("date");
        var d = new Date();
        var day = d.getDate();
        var month = d.getMonth();
        var year = d.getYear();
        a.innerHTML = day+"-"+month+"-"+year;
        
    }
</script>

</html>