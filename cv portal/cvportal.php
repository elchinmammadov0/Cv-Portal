<?php
$host="localhost";
$user="root";
$password="";
$db="login";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
 echo "connection error";
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];

	//$sql="SELECT*FROM WHERE username= ' ".$username." ' AND password= ' ".$password." ' ";
	$con=mysqli_connect("localhost","root","","login");

	$result=mysqli_query($con, "SELECT*FROM admin");
	$row = $result->fetch_assoc();
	
	/*if($row["admintype"]=="login")
	 {
		header("location:adminhome.php");
	}*/
	header("Location:adminhome.php");

	
	
	
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	
	<title>Login Page</title>
    <style>
        body {
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: url() no-repeat;
	background-size: cover;
    background-color: hsl(234, 65%, 60%);
	
}

.login-box {
	width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: #f8f8f8;
}

.login-box h1 {
	float: left;
	font-size: 40px;
	border-bottom: 4px solid #ababff;
	margin-bottom: 50px;
	padding: 13px;
}

.textbox {
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 1px solid #f5f5f7;
}

.fa {
	width: px;
	float: left;
	text-align: center;
}

.textbox input {
	border: none;
	outline: none;
	background: none;
	font-size: 18px;
	float: left;
	margin: 0 10px;
}

.button {
	width: 100%;
	padding: 8px;
	color: #3d0b9b;
	background: none #ababff;
	border: none;
	border-radius: 6px;
	font-size: 18px;
	cursor: pointer;
	margin: 12px 0;
}

    </style>
</head>

<body>
	<form action="#" method="POST">
		<div class="login-box">
			<h1>Login</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Username"
						name="username" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value="">
			</div>

			<input class="button" type="submit"
					name="login" value="Sign In" >
		</div>
	</form>
	



</body>

</html>
