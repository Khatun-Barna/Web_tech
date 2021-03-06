<?php
session_start();
$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Tutor Finder</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body class="outer">
    <div class="header">
        <h1>Online Tutor Finder</h1>
        <h4>Learn Teach Earn</h4>
    </div>

    <nav>        
    <?php
            if($_SESSION['status']==0){
        ?>
            <ul>
            <li><a  href="dashboard.php"><img align="center" src="image/home.png"></a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
             <li><a href="RegistrationReview.php">Registration Review</a></li>
            <li><a href="UpdateSystemInfo.php">Update Information</a></li>
            
        </ul>

        <ul class="r">
            <li><a href="AdminNotification.php">Notification</a></li>
           <li><a class="active" href="profile.php">Admin</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
            
        <?php
            } 
            else{
        ?>
        <ul>
            <li><a  href="newsfeed.php"><img align="center" src="image/home.png"></a></li>
            <li><a href="newsfeed.php">News Feed</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="post.php">Post</a></li>
            
        </ul>

        <ul class="r">
            <li><a href="notification.php">Notification</a></li>
            <li><a class="active" href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <?php
            }
        ?>
    </nav>

	<?php
	include 'control/connection.php';
		$q = "SELECT * FROM `user` WHERE `id` = $id";
		$query = mysqli_query($con,$q);

		while($res = mysqli_fetch_array($query)){
	?>
    <form name="search_form_results"  action="#" method="POST" class="timeline">
    <table class="proTable">
        <tr>
            <th><label for="timeline">Timeline</label></th>
        </tr>
        <tr>
            <th><button onclick="profileBtn();" type="submit" name="btnPersonalInfo" >Personal Information</button></th>
        </tr>
        <?php
            if($res['status'] == 2){
        ?>
        <tr>
            <th><button onclick="tutioninfoBtn();" type="submit" name="btnTutionInfo">Tution Information</button></th>
        </tr>
        <?php
            }
        ?>
        <tr>
            <th><button onclick="acSetBtn();" class="active" type="submit" name="btnAccountSet">Account Settings</button></th>
        </tr>
    </table>
    </form>
    <?php
        }
    ?>

    <form  action="control/updatepass.php" method="POST" class="inner">
	     <table>
            <tr>
                <th>
                    <h1 style="margin-bottom: 10px"><label for="">Update your Password Here</label></h1>
					</br>
                </th>
				</tr>
				</table>
				
				<table>
			 <tr>
                <th>
                    <input type="password" name="oldPass" id="old_password" placeholder="Enter Old Password" required><br>
                </th>
            </tr>
				<tr>
					<th>
                    <input type="password" name="newPass" id="new_Password" placeholder="Enter New Password" required><br>
						</th>
				</tr>
				<tr>
					<th>
                    <input type="password" name="conPass" id="con_Password" placeholder="Confirm your Password" required><br>
						</th>
				</tr>
					</table>
					<br>
					<table>
				<tr>	
				
                <th>
                    <button type="submit" name="submit" >Update</button>
                    <br>
                    <span><?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; unset($_SESSION['msg']); }
                    ?></span>
                </th>
            </tr>
        </table>
	
		</form>
            
	<script src="js/script.js"> </script>
</body>
</html>