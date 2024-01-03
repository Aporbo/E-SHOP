<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cart</title>
</head>

<table border="1" align="center" width="1600">

    <tr>
        <th colspan="3" align="right" width="60%">
            <a href="home.php"><img src="pictures\esop.png" align="left" align="top" width="20%"></a>
            <br>
            <br>

            <a href="../account/login.php">Login</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="order.php">Order</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="cart.php">Cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>

    </tr>

    <td valign="top" width="10%">
        <label><b>MY Account</b></label><br>
        <hr>
        <ul>

          <li><a href="home.php">Home</a>	</li>
            <li><a href="../account/profile.php">View profile</a> </li>
            <li><a href="order.php">My Orders </a></li>
            <li><a href="../account/editprofile.php">settings</a></li>
            <li><a href="help.php">Help </a></li>
            <li><a href="../account/login.php">Logout </a></li>

        </ul>
        
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


    <td valign="top" width="40%">

        <table border="1" align="center" width="100%">
            <tr height="100">
                <th><img src="pictures/esop.png" width="100%" height="100%"></th>

            </tr>
            <tr>
                <th align="center"><label><h3>Payment</h3></label></th>

            </tr>
        </table>
			<fieldset>
		<legend><h3>PAYMENT</h3></legend>

        <table align="left" width="100%">

            <tr height="30">

            </tr>
            <tr height="50">
							<td width="150">
							<span>Paypal Account</span>
							</td>
							<td>
							:&nbsp<input type="text">
							</td>


            </tr>
          <tr height="50">
							<td width="150">
							<span>Datch Bangla Account</span>
							</td>
							<td>
							:&nbsp<input type="text">
							</td>


            </tr>
            <tr height="30">

            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" value="Done" onclick="function1()">
                </td>
            </tr>
			
        </table>
		</fieldset>

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

window.alert ("product purchesed");
}
	
	</script>

</html>