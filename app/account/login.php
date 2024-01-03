<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
    <script defer src="JS/login.js"></script>
</head>

<body>
    <div class="container">
        <header>
            <a href="home.php"><img src="eshop_logo.png" alt="Logo" width="20%"></a>
            <nav>
                <a href="../visitor/home.php">Home</a>
            </nav>
        </header>
        <section class="login-section">
            <h2>Login</h2>
            <form method="post" novalidate id="loginForm">
                <label for="username">User Name:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>

                <br><br>

                <input type="submit" value="Submit">
                <a href="forgotpassword.php">Forgot Password?</a>
            </form>
            <p class="registration-link">Don't have an account? <a href="registration.php">Register here</a></p>
        </section>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['username'];

        include_once("../../data/user_access.php");

        $result = searchUser($name);

        if ($result && ($_POST['username'] == $result['username']) && ($_POST['password'] == $result['password'])) {
            session_start();
            $_SESSION['user'] = $result;

            if ($_SESSION['user']['usertype'] == "admin") {
                header("location:../admin/loggedin.php");
            } else if ($_SESSION['user']['usertype'] == "user") {
                header("location:../user_pages/home.php");
            }
        } else {
    ?>
            <script>
                alert("Invalid Username Or Password");
            </script>
    <?php
        }
    }
    ?>
</body>

</html>
