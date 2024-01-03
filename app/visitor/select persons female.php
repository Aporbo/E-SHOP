<?php include "../../data/product_access.php"; ?>

<?php
$catgorywomen = catgorywomen();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Women's Category</title>
    <link rel="stylesheet" type="text/css" href="CSS/catgory_men_style.css">
</head>

<body>

    <div class="header">
        <a href="home.php"><img src="pictures\eshop_logo.png" alt="Logo" align="left" align="top" width="20%"></a>
        <div class="header-links">
            <a href="../account/login.php">Login</a>
            <a href="../account/login.php">Order</a>
            <a href="cart.php">Cart</a>
        </div>
    </div>

    <div class="container">
        <div class="categories">
            <h3>Catagories</h3>
            <ul>
                <li><a href="select persons male.php">Men's Product</a></li>
                <li><a href="select persons female.php">Women's Product</a></li>
               
            </ul>
        </div>

        <div class="content">
            

            <br>

            <table align="center">
                <tr>
                    <td>
                        <h3>All Products</h3>
                    </td>
                </tr>
            </table>
            <br>

            <table align="left" width="100%">
                <?php foreach ($catgorywomen as $product) { ?>
                    <tr>
                        <td>
                            <a href="spf products.php?pname=<?= $product['subcatagory'] ?>">
                                <img src="<?php
                                            if ($product['subcatagory'] == "Dress") : ?>pictures\pic.jpg<?php endif; ?><?php
                                                                                                                    if ($product['subcatagory'] == "Pant") : ?>pictures\wpant.jpg<?php endif; ?><?php
                                                                                                                                                                                    if ($product['subcatagory'] == "Shoe") : ?>pictures\leather.jpg<?php endif; ?><?php
                                                                                                                                                                                                                                                                    if ($product['subcatagory'] == "Bags") : ?>pictures\bag.jpg<?php endif; ?>" align="left" align="top" width="20%" height="50%">
                                <br><h4><?= $product['subcatagory']; ?><br></h4></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>

    <div class="footer">
        <a href="aboutus.php">Return and Refund policy</a>
        <a href="help.php">Help</a>
    </div>

</body>

</html>
