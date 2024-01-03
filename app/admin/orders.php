
<?php include "../../data/product_access.php"; ?>

<?php
  
        
        $order= adminorders();
        session();
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />    <title>All Orders</title>
</head>
<body width="1600">
    <table width="1600" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="2">
                <table border="0">
                    <tr align="center">
                        <td width="230" height="100">
                            <a href="loggedin.php"><img src="../res/common/esop.PNG" alt="Eshop" width="200" ></a>
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

                <table >
                    <tr >
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
			<li><a href="pending.php">Orders</a></li>
            <li><a href="allProducts.php">All Products</a></li>
            
            <li><a href="settings.php">Add Products</a></li>
        </td>
            <td valign="top" height="400" align="center">
                 <table border="1" align="center" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <th align="center"><label><h3>All Orders</h3></label></th>
            </tr>
        </table>

        <table align="center" width="100%">
            <tr align="center"><br>
                
                <td>
                    <a href="pending.php"><input type="submit" value="Pending Deleveries" ></a>
                </td>
                <td>
                    <a href="neworders.php"><input type="submit" value="New Orders" ></a>
                </td>
                
            </tr>
            <tr></tr>
            
        </table>

        <table align="center" width="100%">
            <tr ><br><br>
               <td width="17" align="center">
                   <label><h3>Order Image</h3></label>
               </td>
                <td width="17" align="center">
                    <label><h3>Order Info</h3></label>
                    
                </td>
                 <td width="16" align="center">
                    <label><h3>Customer</h3></label>
                    
                </td>
                 
                 <td width="17" align="center">
                    <label><h3>Track Id</h3></label>
                </td>
                 
            </tr>

                    <?php foreach ($order as $productn) { ?>
                    <tr>
                        <td align="center">
                            <img src="pictures\<?=$productn['ppic'] ;?>" align="center" align="top" width="100" height="100" >
                        </td>
                        <td align="center">
                            Name :<?=$productn['pname']; ?><br>
                            Quantity :<?=$productn['quantity']; ?><br>
                            Cost :<?=$productn['cost']; ?><br>
                            Code :<?=$productn['code']; ?><br>
                            Size :<?=$productn['size']; ?><br>
                            Color :<?=$productn['colour']; ?><br><br>
                        </td>
                        <td align="center">
                            <?=$productn['username']; ?>
                        </td> 
                       
                        <td align="center">
                            <?=$productn['tracknumber'] ;?>
                        </td>
                        
                            
                            
                        </tr>
                    <?php } ?>  
                    
        </table>


            </td>
        </tr>
        
    </table>
</body>
