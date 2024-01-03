<?php include "data/product_access.php"; ?>
<style>
<?php include "app/visitor/CSS/home.css"; ?>
</style>
<?php include "data/admin_user_service.php"; ?>
<?php
        $catgorymen = discount();
        $offer = todaysoffers();      
?>
<html>

<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

	<table align="center" width="1600" >
	
				
<tr>
    <th colspan="4" align="center" width="60%">
        <nav>
            <a href="app/visitor/home.php"><img src="app/visitor/pictures\eshop_logo.png" align="left" align="top" width="20%"></a>
			<div class="search-bar">
                <input type="text" class="search-input" placeholder="Search...">
                <button class="search-button">Search</button>
            </div>
            <a href="app/account/login.php">Login</a>
            <a href="app/account/login.php">Order</a>
            <a href="app/visitor/cart.php">Cart</a>
            
         
        </nav>
    </th>
</tr>

<tr>
<td class=" categ"  valign="top"  width="8px">
<label><b class="left-category">Catagories</b></label><br><hr>
	<ul>
	<a class="intro" href="app/visitor/select persons male.php">Men's Product</a><hr>
	<li><a href="app/visitor/spm products.php?pname=Shirt">Men's Shirts</a></li>
	<li><a href="app/visitor/spm products.php?pname=Pant">Men's Pants</a></li>
	<li><a href="app/visitor/spm products.php?pname=Shoe">Men's Shoes</a></li>
	<li><a href="app/visitor/spm products.php?pname=Belt">Belt</a></li><br>
	<a class="intro" href="app/visitor/select persons female.php">Women's Product</a><hr>
	<li><a href="app/visitor/spf products.php?pname=Dress">Dresses</a></li>
	<li><a href="app/visitor/spf products.php?pname=Pant">Pants</a></li>
	<li><a href="app/visitor/spf products.php?pname=Shoe">Shoes</a></li>
	<li><a href="app/visitor/spf products.php?pname=Bags">Bags</a></li><br>
	
	</ul>

	</td>
<td></td>

</td>
	<td valign="top" width="40%" >
	  <div class="slider">
      <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">

        <div class="slide first">
          <img src="app/visitor/pictures\banner1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="app/visitor/pictures\banner2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="app/visitor/pictures\banner3.jpg" alt="">
        </div>
   
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
         
        </div>
      </div>
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        
      </div>
    </div>
	<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>

<div class="category-container">
    <div class="category">
        <div>
            <img src="app/visitor/pictures\man.png" width="150"><br>
            <h3><a  href="app/visitor/select persons male.php"> Men's Item </a></h3>
        </div>
        <div>
            <img src="app/visitor/pictures\female2.png" width="150"><br>
            <h3><a  href="app/visitor/select persons female.php"> Female's Item </a></h3>
        </div>
       
    </div>

    <div class="sale-container">
        <h2><font color="brown">11.11 Sale</font></h2>
        <div class="product-container">
            <?php foreach ($catgorymen as $productn) { ?>
                <div class="product">
                    <a href="app/visitor/man product.php?id=<?=$productn['code']?>">
                        <img src="app/visitor/pictures\<?=$productn['pdpic']?>" class="product-image">
                        <h4><?=$productn['name']?> <br>Discount : <?=$productn['offer']?></h4>
                    </a>
                </div>
            <?php } ?>	
        </div>
    </div>

    <div class="bestseller-container">
        <h2><font color="brown">Best seller</font></h2>
        <div class="product-container">
            <?php foreach ($offer as $product) { ?>
                <div class="product">
                    <a href="app/visitor/flat.php?id=<?=$product['code']?>">
                        <img src="app/visitor/pictures\<?=$product['pdpic']?>" class="product-image">
                        <h4><?=$product['name']?> <br><?=$product['cost']?></h4>
                    </a>
                </div>
            <?php } ?>	
        </div>
    </div>

    <div class="footer">
        <a href="app/visitor/aboutus.php">Return and Refund policy</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="app/visitor/help.php">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

    <script src="app/visitor/home.js"></script>
</div>


</body>


</html>