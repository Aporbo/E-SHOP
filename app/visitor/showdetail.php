<?php include "../../data/product_access.php"; ?>
<?php
    $productId =$_GET['id'];
	
    $productcode = getProductById($productId);
    $productcmnts = getProductforcmnt($productId);
?>
<?php

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
                           window.location.href = window.location.href;
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
            $productcode['username']=$_SERVER['REMOTE_ADDR'];
            if(addProductToWish($productcode)==true)
            {
                        ?>
                       <script>
                           
                            window.alert("Successfully Added To Your Wish List");
                        </script>
                        <?php
            }
             else
         {
                            ?>
                       <script>
                          
                            window.alert("Error!404 for adding To Your Wish List");
                        </script>
                        <?php
         }

        }



?>


<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>man Product detils</title>
</head>

	<table align="center" width="1600" >
	
			<tr><th colspan="3" align="right" width="60%">
                <a href="home.php"><img src="pictures\esop.png" align="left" align="top" width="20%" ></a>
				<br>
				<br>
		
				 <a href="../account/login.php">Login</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<a href="../account/login.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
			
			</tr>
		
		<td  valign="top"  width="10%">
		<label><b><a href="home.php">Home</a></b></label><br><hr>
		<label><b>Catagories</b></label><br><hr>
			<ul>
			<a href="select persons male.php">Men's Product</a><hr>
			<li><a href="spm products.php?pname=Shirt">Men's Shirts</a></li>
			<li><a href="spm products.php?pname=Pant">Men's Pants</a></li>
			<li><a href="spm products.php?pname=Shoe">Men's Shoes</a></li>
			<li><a href="spm products.php?pname=Belt">Belt</a></li><br>
			<a href="select persons female.php">Women's Product</a><hr>
			<li><a href="spf products.php?pname=Dress">Dresses</a></li>
			<li><a href="spf products.php?pname=Pant">Pants</a></li>
			<li><a href="spf products.php?pname=Shoe">Shoes</a></li>
			<li><a href="spf products.php?pname=Bags">Bags</a></li><br>
			
			
			</ul>
		</td>
			
			<td valign="top" width="40%" >
					<!-- <img src="pictures\header.png" align="left" align="top" width="100%" > -->

					
					<table align="left" width="100%" >
					<form method="POST">
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
                                <legend>Select Quantity</legend>
                                Available Quantity :<?= $productcode['quantity'] ?> Select :-
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
							
								<a href="../account/login.php"><input type="button" value="Purches Now" ><a/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="submit" value="Add to Cart" name="submit" />
								<input type="submit" name="wishbtn" value="wish" />
						
						
							</td>
							
						</tr>
						<tr>
						    <td>
						        
						    </td>
						    <td>
				  
			
	
			
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