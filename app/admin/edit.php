<?php include "../../data/admin_user_service.php"; ?>
<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>
<?php
        $uname = $_GET['un'];
        if($_SERVER['REQUEST_METHOD']=="POST"){
        $username['username']=$uname;
        $username['email']=$_POST['email'];
        $username['name']=$_POST['name'];
        $username['gender']=$_POST['gender'];
        $username['dob']=$_POST['dob'];
        $username['address']=$_POST['address'];
        $username['pp']=$_POST['pp'];
        $username['usertype']=$_POST['usertype'];
        $username['status']=$_POST['status'];
        
        if(UpdateUserByUserName($username)==true){
            echo "<script>
                    alert('Record Updated');
                    document.location='search.php';
                 </script>";
            die();
        }
    }
        $User = getUsersByUserName($uname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
<link rel="stylesheet" href="css/loggedin.css">
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/edit.css">

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
	
<fieldset class="user-edit-form">
    <legend><b>USER | EDIT</b></legend>
    <br/>
    <form method="POST" novalidate>
        <table class="user-edit-table" width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td class="label">User Name</td>
                <td class="separator">:</td>
                <td class="value"><input class="input-field" name="name" type="text" value="<?=$User['username'];?>"></td>
                <td class="spacer"></td>
            </tr>
            <tr><td colspan="4" class="hr"><hr /></td></tr>
            <tr>
                <td class="label">Name</td>
                <td class="separator">:</td>
                <td class="value"><input class="input-field" name="name" type="text" value="<?=$User['name'];?>"></td>
                <td class="spacer"></td>
            </tr>
            <tr><td colspan="4" class="hr"><hr /></td></tr>
            <tr>
                <td class="label">Email</td>
                <td class="separator">:</td>
                <td class="value">
                    <input class="input-field" name="email" type="text" value="<?=$User['email'];?>">
                    <abbr title="hint: sample@example.com"><b class="info-icon">i</b></abbr>
                </td>
                <td class="spacer"></td>
            </tr>
            <tr><td colspan="4" class="hr"><hr /></td></tr>
            <tr>
                <td class="label">Gender</td>
                <td class="separator">:</td>
                <td class="value">
                  <input class="radio-field" type="radio" name="gender" value="male" <?php if($User['gender'] =="male") :?> checked<?php endif; ?> >Male
                  <input class="radio-field" type="radio" name="gender" value="female" <?php if($User['gender'] =="female") :?> checked<?php endif; ?>>Female
                  <input class="radio-field" type="radio" name="gender" value="other"<?php if($User['gender'] =="other") :?> checked<?php endif; ?>  >Other
                </td>
                <td class="spacer"></td>
            </tr>
            <tr><td colspan="4" class="hr"><hr /></td></tr>
            <tr>
                <td class="label">Date of Birth</td>
                <td class="separator">:</td>
                <td class="value">
                    <input class="input-field" name="dob" type="text" value="<?=$User['dob'];?>">
                    <font size="2"><i>(dd/mm/yyyy)</i></font>
                </td>
                <td class="spacer"></td>
            </tr>
            <tr><td colspan="4" class="hr"><hr /></td></tr>
            <tr>
                <td class="label">Address</td>
                <td class="separator">:</td>
                <td class="value"><input class="input-field" name="address" type="text" value="<?=$User['address'];?>"></td>
                <td class="spacer"></td>
            </tr>
            <tr><td colspan="4" class="hr"><hr /></td></tr>
            <tr>
                <td class="label">Picture</td>
                <td class="separator">:</td>
                <td class="value">
                    <table>
                        <tr>
                            <td><img width="48" src="../res/user/<?=$User['pp'];?>" /></td>
                            <td><input class="input-field" type="file" name="pp"></td>
                        </tr>
                    </table>
                </td>
                <td class="spacer"></td>
            </tr>
            <tr><td colspan="4" class="hr"><hr /></td></tr>
            <tr>
                <td class="label">Role</td>
                <td class="separator">:</td>
                <td class="value">
                    <select class="input-field" name="usertype">
                        <option></option>
                        <option value="admin"<?php if($User['usertype'] =="admin") :?> selected <?php endif; ?> >Admin</option>
                        <option value="Delivery Man"<?php if($User['usertype'] =="executive") :?> selected <?php endif; ?> >Delivery Man</option>
                        <option value="user"<?php if($User['usertype'] =="user") :?> selected <?php endif; ?> >User</option>
                    </select>
                </td>
                <td class="spacer"></td>
            </tr>
            <tr><td colspan="4" class="hr"><hr /></td></tr>
            <tr>
                <td class="label">Status</td>
                <td class="separator">:</td>
                <td class="value">
                    <select class="input-field" name="status">
                        <option></option>
                        <option value="active"<?php if($User['status'] =="active") :?> selected <?php endif; ?> >Active</option>
                        <option value="pending"<?php if($User['status'] =="pending") :?> selected <?php endif; ?> >Pending</option>
                        <option value="blocked"<?php if($User['status'] =="blocked") :?> selected <?php endif; ?> >Blocked</option>
                    </select>
                </td>
                <td class="spacer"></td>
            </tr>
            <tr><td colspan="4" class="hr"><hr /></td></tr>
        </table>
        <hr class="hr" />
        <input class="submit-button" type="submit" value="Update" />
        <a class="back-link" href="search.php">Back to Search</a>
    </form>
</fieldset>

			</td>
		</tr>
		
	</table>
</body>
<script>
function myEditFunction1() {
    var a = document.getElementsByTagName("fieldset")[0];
    a.innerHTML = "Profile Edited Successfully";
    window.alert ("Profile Edited Successfully");
    
}
</script>
</html>
