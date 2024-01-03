<?php include "../../data/product_access.php"; ?>
<?php
	session();
    $productId=$_GET['cd'];
    $productQn=$_GET['qn'];
    $productcode = getProductById($productId);
    
    if(isset($_POST["submit"]))
    {
        $d=0;
        $productqt =$productQn;
        if(isset($_COOKIE['item']))
           {
               foreach($_COOKIE['item'] as $name => $value)
               {
                   $d=$d+1;
               }
               $d=$d+1;
           }
           else
           {
               $d=$d+1;
           }
           $sql = "SELECT * FROM allproducts WHERE code=$productId";        
           $res3 = executeSQL($sql);
           while($row3=mysqli_fetch_array($res3))
           {
               $img1=$row3["pdpic"];
               $nm=$row3["name"];
               $price=$row3["sprice"];
               $qty=$productqt;
               $total=$price*$qty;
               $cd=$row3["code"];
           }
           
           
           
           if(isset($_COOKIE['item']))
           {
               foreach($_COOKIE['item'] as $name1 => $value)
               {
                   $values11=explode("_",$value);
                   $found=0;
                   if($img1==$values11[0])
                   {
                       $found=$found+1;
                       $qty=$productqt;
                       
                       $tb_qty;
                       $sql = "SELECT * FROM allproducts WHERE code=$productId"; 
                       $res = executeSQL($sql);
                       while($row=mysqli_fetch_array($res))
                        {
                           $tb_qty=$row["quantity"];
                        }
                       if($tb_qty<$qty)
                       {
                           ?>
                           <script>
                               alert("Quantity Not Available Right Now");
                            
                           </script>
                           
                           <?php
                       }
                       else
                       {   
                           $total=$values11[2]*$qty;
                           setcookie("item[$name1]",$img1."_".$nm."_".$price."_".$qty."_".$total."_".$cd,time()+(86400 * 1800));
                        }
                   }
               }
               if($found==0)
               {
                    $tb_qty;
                       $sql = "SELECT * FROM allproducts WHERE code=$productId"; 
                       $res = executeSQL($sql);
                       while($row=mysqli_fetch_array($res))
                        {
                           $tb_qty=$row["quantity"];
                        }
                       if($tb_qty<$qty)
                       {
                           ?>
                           <script>
                               alert("Quantity Not Available Right Now");
                            
                           </script>
                           
                           <?php
                       }
                       else
                       {   
                           setcookie("item[$d]",$img1."_".$nm."_".$price."_".$qty."_".$total."_".$cd,time()+(86400 * 1800));
                       }
               }
           }
        else
        {
             $tb_qty;
                       $sql = "SELECT * FROM allproducts WHERE code=$productId"; 
                       $res = executeSQL($sql);
                       while($row=mysqli_fetch_array($res))
                        {
                           $tb_qty=$row["quantity"];
                        }
                       if($tb_qty<$qty)
                       {
                           ?>
                           <script>
                               alert("Quantity Not Available Right Now");
                            
                           </script>
                           
                           <?php
                       }
                       else
                       {   
                           setcookie("item[$d]",$img1."_".$nm."_".$price."_".$qty."_".$total."_".$cd,time()+(86400 * 1800));
                       }
            
        }                
        ?> <script>
                           window.location.href = "delevaryAddress.php";
                        </script>
                        <?php
    }
         
                       
?>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
    <title>Purches</title>
</head>
<table align="center" width="1600" >
		
		<tr>
			<th colspan="4" align="center" width="60%">
				<nav>
					<a href="../user_pages/home.php"><img src="pictures/eshop_logo.png" align="left" align="top" width="20%"></a>
					<div class="search-bar">
						<input type="text" class="search-input" placeholder="Search...">
						<button class="search-button">Search</button>
					</div>
					
					Login as <a href="../account/profile.php"><?= $_SESSION['user']['name']; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="logouthandler.php">Logout</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
					<a href="../user_pages/order.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="../user_pages/cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
					<div class="dropdown">
			
					<ul>
					 <a href="../user_pages/home.php">Home</a></li>
					   <a href="../account/profile.php">View profile</a></li>
					   <a href="../user_pages/order.php">My Orders</a></li>
						<a href="../account/editprofile.php">Settings</a>
						<a href="../account/changepass.php">Change Password</a></li>
						<a href="../account/changepp.php">Change Profile Picture</a></li>
					   <a href="../user_pages/logouthandler.php">Logout</a></li>
					</ul>
				</div>
			
				</tr>

    <td valign="top" width="40%">

        <table  align="center" width="100%">
            <tr height="100">
                <!-- <th><img src="pictures/eshop_logo.PNG" width="100%" height="100%"></th> -->

            </tr>
            <tr>
                <th align="center"><label><h3>Purche Now</h3></label></th>

            </tr>
        </table>
        <table align="left" width="100%">
           <form method="POST" novalidate>
                <thead>
               <tr>
                <td width="20%">
                    Item Image
                </td>
                 <td width="20%">
                    Product Name
                </td>
                <td width="20%">
                    Price
                </td>
                <td width="20%">
                    Quantity
                </td>
                <td width="20%">
                    Total Price
                </td>
            </tr>
           </thead>
               <tbody>
                    <tr>
                <td>
                    <a href=""><img src="../res/products/<?=$productcode['pdpic'];?>" height="100" width="100"></a>
                </td>
                <td>
                    <h3><?=$productcode['name'];?></h3>
                </td>
                <td>
                    <h3><?=$productcode['sprice'];?></h3>
                </td>
                <td>
                   <h3><?=$productQn?></h3>
                </td>
                <td>
                    <h3><?=$productQn*$productcode['sprice'];?></h3>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Checkout" name="submit"/></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php 
            $_SESSION["pay"]=$productQn*$productcode['sprice'];   
            ?>
            
           </tbody>
           </form>
        </table>  
        

    </td>



   






</table>


</html>