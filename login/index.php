<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>logged</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h3>Hello! All your Information can be found here. Yes! This is your profile page.</h3>

	<b> Name: </b> <?php echo $user_data['Name']; ?> <br>
	<b> DOB: </b> <?php echo $user_data['DOB']; ?> <br>
	<b> Medical Info: </b> <?php echo $user_data['Medical_Info']; ?> <br>
	<b> Address: </b> <?php echo $user_data['Address']; ?> <br>
	<b> Contact Number: </b> <?php echo $user_data['Contact']; ?> <br>

</body>
</html>
