<?php include "../../data/admin_user_service.php"; ?>
<?php include "../../data/session_service.php"; ?>
<?php
	session();
?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $searchKey = $_POST['search'];
        $searchfilter = $_REQUEST['filter'];
        if($searchfilter == "any")
        {
            $AllUser = getAllUsers();
        }
        else if($searchfilter == "name")
        {
            $AllUser = getUsersByName($searchKey);
        }
         else if($searchfilter == "email")
        {
            $AllUser = getUsersByEmail($searchKey);
        }
        else if($searchfilter == "status")
        {
            $AllUser = getUsersByStatus($searchKey);
        }
        else
         {
             $AllUser = getUsersByType($searchKey);
         }
    } 
    else 
    {
         $AllUser = getAllUsers();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../visitor/CSS/home.css">
<link rel="stylesheet" href="css/loggedin.css">
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/search.css">

	<title>Search</title>
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
	
<div class="container">
    <fieldset class="search-container">
        <legend class="search-legend">USER | SEARCH</legend>
        <form method="POST" novalidate class="search-form"> 
            <label for="filter">Filter By</label>
            <select name="filter" id="filter" class="filter-select">
                <option value="any">Any</option>
                <option value="name">Name</option>
                <option value="email">Email</option>
                <option value="status">Status</option>
                <option value="usertype">Type</option>
            </select>
            <input type="text" id="searchuserbox" name="search" class="search-input"/>
            <input type="submit" value="Search" class="search-button"/>
            <a href="create.php" class="create-link">Create New</a>
        </form>
    </fieldset>

    <br/>

    <table class="user-table">
        <tr>
            <th align="left">NAME</th>
            <th align="left">EMAIL</th>
            <th align="left">STATUS</th>
            <th colspan="3"></th>
        </tr>
        
        <?php if (count($AllUser) == 0) { ?>
            <tr><td colspan="4">NO RECORD FOUND</td></tr>
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
</div>

			
			</td>
		</tr>
		
	</table>
</body>
</html>
