<?php include "../../data/product_access.php"; ?>
<?php
	session();
?>

<?php 
                if(isset($_COOKIE['item1']))
                {
                unset($_COOKIE['item1']);
                 setcookie('item1', '', time() - 3600);
                   
                }
                
                if($_SERVER["REQUEST_METHOD"]=='POST'){
                    
                
                    
                  if(isset($_COOKIE['item']))
                { 
                
                foreach($_COOKIE['item'] as $name1 => $value)
                    {
                       $values11=explode("_",$value);

                        $img1=$values11[0];
                        $nm=$values11[1];
                        $price=$values11[2];
                        $qty=$values11[3];
                         $total=$values11[4];
                        $cd=$values11[5];
                        setcookie("item1[$name1]",$img1."_".$nm."_".$price."_".$qty."_".$total."_".$cd,time()+ (86400 * 1800));
                        
                        $productcode = getProductById($cd);
                       // $trackid=getTrackid("tracknumber");
                      //  $trackid += 1;
                      //  $_SESSION['tracknumber']=$trackid;
                    
                        $customersts="Not Received";
                        $adminsts="Not Seen";
                        $sendshipping="Not Sent";
                        $shippingsts="Not Received";
                        $productcode['code']=$cd;
                        $productcode['pname']=$nm;
                        $productcode['cost']=$price;
                        // $productcode['size']=$productcode['size'];
                        // $productcode['colour']=$productcode['color'];
                        $productcode['quantity']=$qty;
                        $productcode['customersts']=$customersts;
                        $productcode['adminsts']=$adminsts;
                        $productcode['sendshipping']=$sendshipping;
                        $productcode['shippingsts']=$shippingsts;
                        $productcode['ppic']=$img1;
                        $productcode['username']=$_SESSION['user']['username'];
                       // $productcode['tracknumber']=$_SESSION['tracknumber'];
                        
                        
                        if(insertToOrders($productcode)==true)
                        {
                           ?>
                       <script>
                           
                           document.location='order.php'; 
                        </script>
                        <?php  
                        }
                    else
                    {
                        
                    }
                        
                    
                    }
                    if(isset($_COOKIE['item']))
                {
                unset($_COOKIE['item']);
                 setcookie('item', '', time() - 3600);
                    
                }
                }
                    
                    
                }
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
<link rel="stylesheet" href="CSS/payment.css">
<head>
    <title>Payment</title>
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


    <td valign="top" width="40%">

        <table  align="center" width="100%">
            
        <table align="center">
        <tr>
            <th><h3>Payment</h3></th>
        </tr>
    </table>

   
    <div class="container">
        <fieldset>
            <legend><h3>PAYMENT</h3></legend>
            <form method="POST">
                <table>
                    <tr>
                        <td class="label">Choose Your Payment Method :</td>
                        <td class="label">Enter Information According to Your Payment Method Selection :</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="pay" value="Paypal"/>Paypal Account
                        </td>
                        <td>
                            Account No : <input type="text" class="input-field"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="pay" value="dbbl"/>Dutch Bangla Bank(DBBL) Account
                        </td>
                        <td>
                            Pin No: <input type="text" class="input-field"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="pay" value="bkash"/>Bkash Account
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="pay" value="MCash"/>MCash Account
                        </td>
                        <td>
                            <input type="submit" value="Pay" name="submit" class="pay-button"/>
                            <button onclick="location.href='delevaryAddress.php';" class="back-button">GO Back</button>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>

    </td>



  


</table>
<script>
	function function1()
{

    
window.alert ("product purchesed Grand Total= <?=$_SESSION["pay"]?> <br> This List is added as My last Purchases");
}
	
	</script>

</html>