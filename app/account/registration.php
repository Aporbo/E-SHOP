<?php include "../../data/user_access.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="CSS/registration.css">
</head>
<body>
    <div class="container">
        <header>
            <a href="../visitor/home.php"><img src="eshop_logo.png" alt="E-shop" width="200"></a>
            <nav>
                <a href="../visitor/home.php">HOME</a>
                <a href="login.php">LOGIN</a>
            </nav>
        </header>

        <div class="registration-section">
            <form id="registrationForm" method="post">
                <fieldset>
                    <legend><h3>REGISTRATION</h3></legend>
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" required>
                        <abbr title="hint: sample@example.com"></abbr>
                    </div>
                    <div>
                        <label for="uname">User Name:</label>
                        <input type="text" name="uname" id="uname" required>
                    </div>
                    <div>
                        <label for="pass">Password:</label>
                        <input type="password" name="pass" id="pass" required>
                    </div>
                    <div>
                        <label for="cpassword">Confirm Password:</label>
                        <input type="password" name="cpassword" id="cpassword" required>
                    </div>
                    <div>
                        <label for="address">Address:</label>
                        <input type="text" name="address" id="address" required>
                        <div id="addplace"></div>
                    </div>
                    <div>
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" value="male" required>Male
                            <input type="radio" name="gender" value="female" required>Female
                            <input type="radio" name="gender" value="other" required>Other
                        </fieldset>
                    </div>
                    <div>
                        <fieldset>
                            <legend>Date of Birth</legend>
                            <table>
                                <tr>
                                    <td>
                                        <input type="text" name="day" placeholder="Day" size="7" required> /
                                    </td>
                                    <td>
                                        <input type="text" name="month" placeholder="Month" size="7" required> /
                                    </td>
                                    <td>
                                        <input type="text" name="year" placeholder="Year" size="7" required>
                                    </td>
                                    <td>
                                        &nbsp;(dd/mm/yyyy)
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </div>
                    <div>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    include_once("../../data/user_access.php");
    $flag = 0;
    $username = $_REQUEST['uname'];

    if (str_word_count($_REQUEST['name']) < 2) {
        echo "Name must contain 2 words";
        $flag = 0;
    }

    if (!preg_match('/[^a-zA-z_]/', $username)) {
        $result = searchUser($uname);

        if ($result == null) {
        } else {
            echo " <ol> <li>Username already in use </li></br>";
            $flag = 0;
        }
    } else {
        echo " <li>Invalid Characters in UserName</li> </br>";
        $flag = 0;
    }

    if (filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
    } else {
        echo "<li>Invalid email format</li> </br>";
        $flag = 0;
    }

    if (strlen($_REQUEST['pass']) >= 8) {
        if ($_REQUEST['pass'] == $_REQUEST['cpass']) {
        } else {
            echo "<li>Password Didn't Match</li> </br>";
            $flag = 0;
        }
    } else {
        echo "<li>Password Needs to be 8 Character long </li></br>";
        $flag = 0;
    }

    if (empty($_REQUEST['gender'])) {
        echo 'gender not selected(select Male/Female/Other)';
        $flag = 0;
    } else {
    }

    if ($flag != 1) {
        $username = $_REQUEST['uname'];
        $name = $_REQUEST['name'];
        $password = $_REQUEST['pass'];
        $email = $_REQUEST['email'];
        $gender = $_REQUEST['gender'];
        $address = $_REQUEST['address'];
        $day = $_REQUEST['day'];
        $month = $_REQUEST['month'];
        $year = $_REQUEST['year'];
        $dob = "$day/$month/$year";

        $usertype = "user";
        $status = "pending";

        if (addUser($username, $usertype, $password, $name, $gender, $email, $dob, $address, $status) == true) {
            echo "<script>
                    alert('Registration Completed , Please wait for admin confirmation for login. Thank you ');
                    document.location='login.php';
                 </script>";
            die();
        } else {
            echo "Server issue's try again later";
        }
    } else {
        echo " <ul> <li>Fix all the Problems And Try Again !! </li></ul>  ";
    }
}
?>
