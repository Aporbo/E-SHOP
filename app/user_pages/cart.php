<?php include "../../data/product_access.php"; ?>
<?php
	session();

    
if(isset($_COOKIE['item']))
           {
               foreach($_COOKIE['item'] as $name1 => $value)
               {
                   if(isset($_POST["delete$name1"]))
                   {
                       setcookie("item[$name1]","",time()- 3600);
                       ?>
                       <script>
                           window.location.href = window.location.href;

                        </script>
                        <?php
                   }
               }
              
           }
?>
 

<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/home.css">
    <title>Cart</title>
</head>

<table align="center" width="1600" >
		
	<tr>
		<th colspan="4" align="center" width="60%">
			<nav>
				<a href="home.php"><img src="pictures\eshop_logo.png" align="left" align="top" width="20%"></a>
				<div class="search-bar">
					<input type="text" class="search-input" placeholder="Search...">
					<button class="search-button">Search</button>
				</div>
				
				Login as <a href="../account/profile.php"><?= $_SESSION['user']['name']; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="logouthandler.php">Logout</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<a href="order.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
				<div class="dropdown">
        <div class="dropdown-content">
            <div class="sidebar">
                <ul>
                 <a href="home.php">Home</a></li>
                   <a href="../account/profile.php">View profile</a></li>
                   <a href="order.php">My Orders</a></li>
                    <a href="../account/editprofile.php">Settings</a>
                    <a href="../account/changepass.php">Change Password</a></li>
                    <a href="../account/changepp.php">Change Profile Picture</a></li>
                   <a href="logouthandler.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
			</tr>
        
        
        

    <td valign="top" width="40%">

        <table  align="center" width="100%">
         
            <tr>
                <th align="center"><label><h3>Cart</h3></label></th>

            </tr>
        </table>

        <table align="left" width="100%">
           <form method="POST" novalidate>
            
            <?php
            $d=0;
                if(isset($_COOKIE['item']))
                {
                    $d=$d+1;
                }
            if($d==0)
            {
                echo "<h3>You have No Product In the Cart Right Now :(</h3><br><br><br><br><br><br>";
                ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="home.php">Go Shopping</a>     
                <?php
                
                echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
            }
            else
            {
                ?>
                <thead >
               <tr>
                <td width="15%" >
                    <h3>Item Image</h3>
                </td>
                 <td width="30%">
                   <h3>Product Name</h3> 
                </td>
                <td width="20%">
                    <h3>Price</h3>
                </td>
                <td width="20%">
                    <h3>Quantity</h3>
                </td>
                <td width="20%">
                  <h3>Total Price</h3>
                </td>
                <td>
                    
                </td>
            </tr>
           </thead>
               <tbody>
               <?php 
                foreach($_COOKIE['item'] as $name1 => $value)
               {
                   $values11=explode("_",$value);
                    
                    ?>
                    <tr>
                <td>
                    <a href=""><img src="../res/products/<?=$values11[0];?>" height="100" width="100"></a>
                </td>
                <td>
                    <h3><?=$values11[1];?></h3>
                </td>
                <td>
                    <h3><?=$values11[2];?></h3>
                </td>
                <td>
                   <h3><?=$values11[3];?></h3>
                </td>
                <td>
                    <h3><?=$values11[4];?></h3>
                </td>
                <td>
                    <input type="submit" name="delete<?=$name1?>" value="X">
                </td>
            </tr>
               
                    <?php
                }
                
                ?>
                
              
                
                <?php
            }
            
            $total =0;
            if(isset($_COOKIE['item']))
           {
            foreach($_COOKIE['item'] as $name1 => $value)
               {
                   $values11=explode("_",$value);
                    $total = $total+$values11[4];
               }
                $_SESSION["pay"]=$total;
            }
            
            ?>
            <?php
            //$d=0;
                if(isset($_COOKIE['item']))
                { ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><h2>Grand Total</h2></td>
                <td><h2><?=$total?></h2></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><a href="delevaryAddress.php"><input type="button" value="Checkout" /></a></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php } ?>
            
            
           </tbody>
           </form>
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