<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../visitor/CSS/home.css">
</head>
<body width="1200">
	<table width="1080" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="3">
				<table border="0">
				<tr>
    <th colspan="4" align="center" width="60%">
        <nav>
            <a href="home.php"><img src="eshop_logo.png" align="left" align="top" width="20%"></a>
			<div class="search-bar">
                <input type="text" class="search-input" placeholder="Search...">
                <button class="search-button">Search</button>
            </div>
            <a href="../account/login.php">Login</a>
            <a href="../account/login.php">Order</a>
            <a href="cart.php">Cart</a>
            
         
        </nav>
    </th>
</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height="400" valign="center" align="center" colspan="2">
				<table border="0">
				<form method="post" novalidate>
					<tr> 
						<td width="350">
							<fieldset>
								<legend><h3>FORGOT PASSWORD</h3></legend>
								<table>
									<tr>
										<td width="100" >
											<span>Enter Email</span>
										</td>
										<td>
											:&nbsp;<input type="text" name="email">
										</td>
									</tr>
								</table>
								<hr>
								
								<input type="submit" value="submit">
                               
							</fieldset>
						</td>
					</tr>
					</form>
				</table>
			</td>
		</tr>
		
	</table>
</body>
</html>
<?php

		if($_SERVER["REQUEST_METHOD"]=='POST'){

			$email=$_REQUEST['email'];
			
			include_once("../../data/user_access.php");
			$result=searchEmail($email);
			var_dump($result);

			if($email==$result['email'] ){
					session_start();
					$_SESSION['user']=$result;


					if($_SESSION['user']['usertype']=="user"){
					header("location:../user_pages/home.php");
					}
			}else{
				echo "<script>
                    window.alert('Wrong Email');
                    document.location='login.php'; 
                 </script>";
				//header("location:login.php");
				}

		}






?>
