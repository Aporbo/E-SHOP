<?php include "../../data/product_access.php"; ?>

<?php
$catgorymen = catgorymen();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Men's Category</title>
    <link rel="stylesheet" type="text/css" href="CSS/catgory_men_style.css">
    <link rel="stylesheet" type="text/css" href="CSS/home.css">

</head>

<body>

    <div class="header">
        <a href="home.php"><img src="pictures\eshop_logo.png" align="left" align="top" alt="Logo" width="20%"></a>
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

            <table align="center" width="100%">
                <tr>
                    <th align="center"><label><h3>MEN PRODUCTS</h3></label></th>
                </tr>
            </table>

            <br>

            <table align="left" width="100%">
                <?php foreach ($catgorymen as $product) { ?>
                    <tr>
                        <td>
                            <a href="spm products.php?pname=<?= $product['subcatagory'] ?>">
                                <img src="<?php
                                            if ($product['subcatagory'] == "Shirt") : ?>pictures\menshirt1.png<?php endif; ?><?php
                                                                                                                        if ($product['subcatagory'] == "Pant") : ?>pictures\menpant2.jpg<?php endif; ?><?php
                                                                                                                                                                                if ($product['subcatagory'] == "Shoe") : ?>pictures\menshoe1.png<?php endif; ?><?php
                                                                                                                                                                                                                            if ($product['subcatagory'] == "Belt") : ?>pictures\belt1.jpg<?php endif; ?>" align="left" align="top" width="20%" height="50%">
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
