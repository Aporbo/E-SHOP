<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Login</title>
</head>
<body width="1600">
	<table width="1600" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="3">
				<table border="0">
					<tr align="center">
						<td width="230" height="100">
							<a href="home.php"><img src="../res/common/esop.PNG" alt="Eshop" width="200"></a>
						</td>
						<td width="630"></td>
						<td>
							<a href="home.php">HOME</a>&nbsp;&nbsp; | &nbsp;&nbsp;
							<a href="login.php">LOGIN</a>&nbsp;&nbsp; | &nbsp;&nbsp;
							<a href="registration.php">REGISTRATION</a>
					
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height="400" valign="center" align="center" colspan="2">
				<table border="0">
					<tr> 
						<td width="350">
							<fieldset>
								<legend><h3>LOGIN</h3></legend>
								<table>
									<tr>
										<td width="100">
											<span>User Name</span>
										</td>
										<td>
											:&nbsp;<input type="text">
										</td>
									</tr>
								</table>
								<table>
									<tr>
										<td width="100">
											<span>Password</span>
										</td>
										<td>
											:&nbsp;<input type="Password">
										</td>
									</tr>
								</table>
								<hr>
								<input type="checkbox">&nbsp; Remember Me
								<br><br>
								<form action="loggedin.php" novalidate>
								<input type="submit">
                                </form>
								&nbsp;&nbsp;<a href="forgotpassword.php">Forgot Password? </a>
							</fieldset>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
	</table>
</body>
</html>