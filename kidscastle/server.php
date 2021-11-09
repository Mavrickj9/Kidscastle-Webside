<?php 
session_start();

$username = "";
$email = "";
$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'datalogin');

//if login button is clicked
if(isset($_POST['loginbtn'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	
	//ensure that form fields are filled correctly
	if(empty($username)){
		array_push($errors, "Username is required");
	}
	if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
		array_push($errors, "email address is required");
		array_push($errors, "Invalid email format");
	}
	if(count($errors) == 0) {
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $email;
		$_SESSION['success'] = "You are now logged in";
		header('location:index.php');
		
	}
}

?>