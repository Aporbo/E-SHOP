<?php include "../../data/admin_user_service.php"; ?>
<?php include "../../data/session_service.php"; ?>
<?php
	session();
        $username = $_GET['un'];
        if($_SERVER['REQUEST_METHOD']=="POST"){
        if(DeleteUsersByUserName($username)==true){
            echo "<script>
                    alert('User Record Deleted');
                    document.location='search.php';
                 </script>";
            die();
        }
    }
        $User = getUsersByUserName($username);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
<link rel="stylesheet" href="css/loggedin.css">
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/delete.css">

	<title>Edit</title>
</head>
<body width="1600">
	<table width="1600" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
		<th colspan="4" align="center" width="60%">
			<nav>
				<a href="loggedin.php"><img src="pictures\eshop_logo.png" align="left" align="top" width="20%"></a>
				<div class="search-bar">
					<input type="text" class="search-input" placeholder="Search...">
					<button class="search-button">Search</button>
				</div>
				
				Login as <a href="profile.php"><?= $_SESSION['user']['name']; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			
				
				
            <div class="sidebar">
                <ul>
                 <a href="loggedin.php">Home</a></li>
                   <a href="profile.php">View profile</a></li>
                    <a href="editprofile.php">Settings</a>
                    <a href="changepass.php">Change Password</a></li>
                    <a href="changepp.php">Change Profile Picture</a></li>
                   <a href="logouthandler.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
			</tr>
		<tr>
			<td width="200" valign="top">
				
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
			<fieldset class="delete-form">
    <legend><b>USER | DELETE | Are You Sure?</b></legend>
    <br/>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <td width="100"></td>
            <td width="10"></td>
            <td width="230"></td>
            <td></td>
        </tr>
        <tr>
            <td>User Name</td>
            <td>:</td>
            <td><?=$User['username'];?></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><?=$User['name'];?></td>
            <td width="30%" rowspan="7" align="center">
                <img width="128" src="../res/user/<?=$User['pp'];?>"/>
            </td>
        </tr>	            
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?=$User['email'];?></td>
        </tr>		
        <tr><td colspan="3"><hr/></td></tr>			
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td><?=$User['gender'];?></td>
        </tr>
        <tr><td colspan="3"><hr/></td></tr>
        <tr>
            <td>Date of Birth</td>
            <td>:</td>
            <td><?=$User['dob'];?></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Role</td>
            <td>:</td>
            <td><?=$User['usertype'];?></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><?=$User['status'];?></td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>User Since:</td>
            <td>:</td>
            <td><?=$User['regdate'];?></td>
        </tr>
    </table>	
    <hr/>    
    <form method="POST" novalidate>
        <input type="submit" value="Delete"/>
        <a href="search.php">Back to Search</a>
    </form>    
    <br/><br/>
</fieldset>
			</td>
		</tr>
		
	</table>
</body>
<script>
function myEditFunction() {
    window.alert ("Profile Deleted Successfully");
    var a = document.getElementsByTagName("fieldset")[0];
    a.innerHTML = "<legend><b>USER | DELETE</b></legend>";
    
}
</script>
</html>
