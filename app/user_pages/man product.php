<?php include "../../data/product_access.php"; ?>
<?php
    $productId =$_GET['id'];
    
	
    $productcode = getProductById($productId);
    $productcmnts = getProductforcmnt($productId);
	session();

    if(isset($_POST["submit"]))
    {
        $d=0;
        $productqt =$_POST['quantity'];
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
        ?>
                       <script>
                          
                            window.alert("Successfully Added To your Cart");
                        </script>
                        <?php
         
    }

        if(isset($_POST["cmnt"]))
     {
         $productcode['cname']=$_POST['cname'];
         $productcode['cemail']=$_POST['cemail'];
         $productcode['cmnt']=$_POST['textarea1'];
         $productcode['prate']=$_POST['prate'];
         $productcode['pdname']=$productcode['name'];
         if(insertcommnet($productcode)==true)
            {
                 ?>
                       <script>
                           window.location.href = window.location.href;
                             window.alert("Thanks For Your Comment");
                        </script>
                        <?php
            }
     else
     {
                        ?>
                       <script>
                           
                             window.alert("Error! 404 for posting commnet");
                        </script>
                        <?php
     }
        
     }

        if(isset($_POST["wishbtn"]))
        {
            
            $productcode['bpprice']=$productcode['bprice'];
            $productcode['username']=$_SESSION['user']['username'];
            if(addProductToWish($productcode)==true)
            {
                        ?>
                       <script>
                           
                            window.alert("Successfully Added To Your Wish List");
                        </script>
                        <?php
            }
         

        }

         if(isset($_POST["purchasenow"]))
         {
             $d=0;
        $productqt =$_POST['quantity'];
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
                           setcookie("item1[$name1]",$img1."_".$nm."_".$price."_".$qty."_".$total."_".$cd,time()+(86400 * 1800));
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
                           setcookie("item1[$d]",$img1."_".$nm."_".$price."_".$qty."_".$total."_".$cd,time()+(86400 * 1800));
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
                           setcookie("item1[$d]",$img1."_".$nm."_".$price."_".$qty."_".$total."_".$cd,time()+(86400 * 1800));
                       }
        }
              ?>
                       <script>
                           window.location.href = "purches.php?cd=<?=$productcode['code']?>&&qn=<?= $_POST['quantity'] ?>";
                        </script>
                        <?php
         }


?>


<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
<title>man Product detils</title>
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
           
                </tr>
            
    <td class=" categ"  valign="top"  width="8px">
    <label><b class="left-category">Catagories</b></label><br><hr>
        <ul>
        <a class="intro" href="select persons male.php">Men's Product</a><hr>
        <li><a href="spm products.php?pname=Shirt">Men's Shirts</a></li>
        <li><a href="spm products.php?pname=Pant">Men's Pants</a></li>
        <li><a href="spm products.php?pname=Shoe">Men's Shoes</a></li>
        <li><a href="spm products.php?pname=Belt">Belt</a></li><br>
        <a class="intro" href="select persons female.php">Women's Product</a><hr>
        <li><a href="spf products.php?pname=Dress">Dresses</a></li>
        <li><a href="spf products.php?pname=Pant">Pants</a></li>
        <li><a href="spf products.php?pname=Shoe">Shoes</a></li>
        <li><a href="spf products.php?pname=Bags">Bags</a></li><br>
        
        <a class="intro" href="accessories.php">Accessories</a><hr>
        <li><a href="ack products.php?pname=Wallet">Wallet</a></li>
        <li><a href="ack products.php?pname=Bag">Bags</a></li>
        <li><a href="ack products.php?pname=BackCover">Backcovers</a></li>
        <li><a href="ack products.php?pname=HandBand">Handsbands</a></li><br>
        <a class="intro" href="electronics.php">Electronics</a><hr>
        
        <li><a href="eck products.php?pname=TableFan">Table Fans</a></li>
        <li><a href="eck products.php?pname=HeadPhone">Headphones</a></li>
        <li><a href="eck products.php?pname=Smart Watch">Smart Watches</a></li><br>
        </ul>
    
    
    
    </td>
    <td></td>
    
    </td>
			<td valign="top" width="40%" >
					<!-- <img src="pictures\header.png" align="left" align="top" width="100%" > -->

					
					<table align="left" width="100%" >
					<form method="POST" novalidate>
						<tr>
							
							<td valign="top" width="30%"  >
								<img src="pictures\<?= $productcode['pdpic'] ?>" align="left" align="top" height="60%" >
								
								<br><br><br><br><br>
								<h4>Type:<?= $productcode['name'] ?></h4>
								<h4> Cost :<?= $productcode['sprice'] ?></h4>
							</td>
							
							<td valign="top" width="60%">
							
								<h3>Product Details </h3>
							
								<h5>Available Quantity: <?= $productcode['quantity'] ?>  </h5>
								<h5>Cost :<?= $productcode['sprice'] ?>  </h5>
								<h5>Material: <?= $productcode['material'] ?>  </h5>
								<h5>Code:<?= $productcode['code'] ?></h5>
								<h5>Color: <?= $productcode['color'] ?> </h5>
								
							
								<fieldset>
									<legend>Available color</legend>
									
									<input type="radio" name="color"value="Red"<?php if( $productcode['color']=="Red" ):?> checked<?php endif; ?> <?php if( $productcode['color']!="Red" ):?> disabled<?php endif; ?> >Red
									<input type="radio" name="color"value="Green"<?php if($productcode['color']=="Green" ):?> checked<?php endif; ?>  <?php if( $productcode['color']!="Green" ):?> disabled<?php endif; ?> >Green
									<input type="radio" name="color"value="Blue"<?php if($productcode['color']=="Blue") :?> checked<?php endif; ?>  <?php if( $productcode['color']!="Blue" ):?> disabled<?php endif; ?> >Blue
									<input type="radio" name="color"value="White"<?php if( $productcode['color']=="White") :?> checked<?php endif; ?>  <?php if( $productcode['color']!="White" ):?> disabled<?php endif; ?> >White
									<input type="radio" name="color"value="Black"<?php if($productcode['color']=="Black") :?> checked<?php endif; ?>  <?php if( $productcode['color']!="Black" ):?> disabled<?php endif; ?> >Black
								</fieldset>
							
								<fieldset>
									<legend>Available Size</legend>
									<input type="radio" name="Size"value="S" <?php if( $productcode['size']=="S" ):?> checked<?php endif; ?> <?php if( $productcode['size']!="S" ):?> disabled<?php endif; ?>  >S
									<input type="radio" name="Size"value="M"<?php if( $productcode['size']=="M" ):?> checked<?php endif; ?> <?php if( $productcode['size']!="M" ):?> disabled<?php endif; ?> >M
									<input type="radio" name="Size"value="L" <?php if( $productcode['size']=="L" ):?> checked<?php endif; ?> <?php if( $productcode['size']!="L" ):?> disabled<?php endif; ?> >L
									<input type="radio" name="Size"value="XL" <?php if( $productcode['size']=="XL" ):?> checked<?php endif; ?> <?php if( $productcode['size']!="XL" ):?> disabled<?php endif; ?> >XL
									<input type="radio" name="Size"value="XXL"<?php if( $productcode['size']=="XXL" ):?> checked<?php endif; ?> <?php if( $productcode['size']!="XXL" ):?> disabled<?php endif; ?> >XXL
									
								</fieldset>
								<fieldset>
                                <legend>Select Quantity</legend>
                                Available Quantity : <?= $productcode['quantity'] ?> Select :-
								    <select name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
					                </select>
								</fieldset>
								<br>
								<br>
							
								<input type="submit" value="Purches Now" name="purchasenow">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="submit" value="Add to Cart" name="submit" />
								<input type="submit" name="wishbtn" value="wish" />
						
						
							</td>
							
						</tr>
						<tr>
						    <td>
						        
						    </td>
						    <td>
				
                      
			</td>
			
	
			
			<tr height="100">
				<th colspan="2">
					<a href="aboutus.php">Return and Refund policy</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					<a href="help.php">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
				</th>
			</tr>	
		
		
	
	
	
	
	</table>
	
	<script>
	function function1()
{

window.alert ("added to cart");
}
	
	</script>


</html>