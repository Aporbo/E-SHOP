<?php include "../../data/product_access.php"; ?>

<?php
$pnamee = $_GET['pname'];
$productnames = getProductByNameFemale($pnamee);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Female Person Details</title>
    <link rel="stylesheet" type="text/css" href="CSS/spm.css">
</head>

<body>

    <div class="header">
        <a href="home.php"><img src="pictures\eshop_logo.png" alt="Logo"  align="left" align="top" width="20%"></a>
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

            <table align="left" width="100%">
                <?php foreach ($productnames as $productn) { ?>
                    <tr>
                        <td>
                            <a href="man product.php?id=<?= $productn['code'] ?>"><img src="pictures\<?= $productn['pdpic']; ?>" align="left" align="top" width="20%" height="100"><br><h4><?= $productn['name']; ?> <br><?= $productn['sprice']; ?></h4></a> <br><br><br><br><br><br>
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
