<?php include "../../data/product_access.php"; ?>

<?php    
if(isset($_COOKIE['item'])) {
    foreach($_COOKIE['item'] as $name1 => $value) {
        if(isset($_POST["delete$name1"])) {
            setcookie("item[$name1]", "", time()-999999999999999999999999999999999999999999999999999999999999999999999999999999);
            ?>
            <script>
                window.location.href = window.location.href;
            </script>
            <?php
        }
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="CSS/cart.css">
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
            <h3>Cart</h3>

            <table align="left" width="100%">
                <form method="POST" novalidate>

                    <?php
                    $d = 0;
                    if (isset($_COOKIE['item'])) {
                        $d = $d + 1;
                    }
                    if ($d == 0) {
                        echo "<h3>You have No Product In the Cart Right Now :(</h3><br><br><br><br><br><br>";
                    ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="home.php">Go Shopping</a>
                    <?php

                        echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
                    } else {
                    ?>
                        <thead>
                            <tr>
                                <td width="15%">
                                    Item Image
                                </td>
                                <td width="30%">
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
                                <td>

                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($_COOKIE['item'] as $name1 => $value) {
                                $values11 = explode("_", $value);
                            ?>
                                <tr>
                                    <td>
                                        <a href=""><img src="../res/products/<?= $values11[0]; ?>" height="100" width="100"></a>
                                    </td>
                                    <td>
                                        <h3><?= $values11[1]; ?></h3>
                                    </td>
                                    <td>
                                        <h3><?= $values11[2]; ?></h3>
                                    </td>
                                    <td>

                                        <h3><?= $values11[3]; ?></h3>
                                    </td>
                                    <td>
                                        <h3><?= $values11[4]; ?></h3>
                                    </td>
                                    <td>
                                        <input type="submit" name="delete<?= $name1 ?>" value="X">
                                    </td>
                                </tr>

                            <?php
                            }

                            ?>
                        <?php
                    }

                    $total = 0;
                    if (isset($_COOKIE['item'])) {
                        foreach ($_COOKIE['item'] as $name1 => $value) {
                            $values11 = explode("_", $value);
                            $total = $total + $values11[4];
                        }
                        $_SESSION["pay"] = $total;
                    }

                        ?>
                        <?php

                        if (isset($_COOKIE['item'])) { ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><h2>Grand Total</h2></td>
                                <td><h2><?= $total ?></h2></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><a href="../account/login.php"><input type="button" value="Checkout" /></a></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        <?php } ?>

                        </tbody>
                </form>
            </table>

            </div>
    </div>

    <div class="footer">
        <a href="aboutus.php">Return and Refund policy</a>
        <a href="help.php">Help</a>
    </div>

</body>

</html>