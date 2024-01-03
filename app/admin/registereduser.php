<?php include "../../data/session_service.php"; ?>
<?php include "../../data/admin_user_service.php"; ?>
<?php
	session();
    $status = $_GET['st'];
     $AllUser = getUsersBy_Usertype_And_Active($status);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Registered User</title>
</head>
<body width="1600">
	<table width="1600" border="1" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td colspan="2">
				<table border="0">
					<tr align="center">
						<td width="230" height="100">
							<a href="loggedin.php"><img src="../res/common/esop.PNG" alt="Eshop" width="200"></a>
						</td>
						<td width="630"></td>
						<td>
							<span>Logged in as <a href="profile.php"><?= $_SESSION['user']['name']; ?></a></span> &nbsp;&nbsp; | &nbsp;&nbsp;
							<a href="logouthandler.php">Logout</a>

						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td width="200" valign="top">
				<br>
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</span>

				<table >
					<tr >
						<td width="200">
							<hr>
						</td>
					</tr>
				</table>
				<ul>
					<li><a href="loggedin.php">Home</a></li>
					<li><a href="profile.php">View Profile</a></li>
					<li><a href="editprofile.php">Edit Profile</a></li>
					<li><a href="changepp.php">Change Profile Picture</a></li>
					<li><a href="changepass.php">Change Password</a></li>
					<li><a href="logouthandler.php">Logout</a></li>
				</ul>
				<hr>
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User</span><br>
				<hr>
				<ul>
					<li><a href="search.php">Search</a></li>
					<li><a href="create.php">Create New</a></li>
				</ul>
				<hr>
				
				
        <hr>
        <ul>
            Products
            <hr>
			<li><a href="pending.php">Orders</a></li>
            <li><a href="allProducts.php">All Products</a></li>
            <li><a href="settings.php">Add Products</a></li>
			</td>
			<td valign="top" height="400" >
			<hr>
			<h3 align="center">Registered User</h3>
			<hr>
			<fieldset>
    <legend>
        <b>USER | SEARCH</b>
    </legend>
    <a href="create.php">Create New</a>
    <a href="Dashboard.php">Go to Dashboard</a>
</fieldset>
<br/>
<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
        <th align="left">NAME</th>
        <th align="left">EMAIL</th>
        <th align="left">STATUS</th>
        <th colspan="3"></th>
    </tr>
    
     <?php if (count($AllUser) == 0) { ?>
            <tr><td>NO RECORD FOUND</td></tr>
        <?php } ?>
        
    <?php foreach($AllUser as $user) {?>
    <tr>
        <td><?=$user['name'];?></td>
        <td><?=$user['email'];?></td>
        <td><?=$user['status'];?></td>
        <td width="40"><a href="detail.php?un=<?=$user['username'];?>">Detail</a></td>
        <td width="30"><a href="edit.php?un=<?=$user['username'];?>">Edit</a></td>
        <td width="45"><a href="delete.php?un=<?=$user['username'];?>">Delete</a></td>
    </tr>
   
    <?php } ?>
</table>

			
			
			</td>
		</tr>
		
	</table>
</body>
</html>
