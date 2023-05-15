<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$Name = $_POST['Name'];
		$DOB = $_POST['DOB'];
		$Medical_Info = $_POST['Medical_Info'];
		$Address = $_POST['Address'];
		$Contact = $_POST['Contact'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !is_numeric($Name) && is_numeric(($Contact)))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_name,password,Name,DOB,Medical_Info,Address,Contact,user_id) values ('$user_name','$password','$Name','$DOB','$Medical_Info','$Address','$Contact',$user_id')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="User Name"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>
			<input id="text" type="text" name="Name" placeholder="Name"><br><br>
			<input id="text" type="date" name="DOB" placeholder="Date of Birth"><br><br>
			<input id="text" type="text" name="Medical_Info" placeholder="Medical Information"><br><br>
			<input id="text" type="text" name="Address" placeholder="Address"><br><br>
			<input id="text" type="int" name="Contact" placeholder="Contact Number"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>
