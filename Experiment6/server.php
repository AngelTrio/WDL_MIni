<?php
session_start();
$errors = array();
$db = mysqli_connect('localhost','root','','exp6');

if(isset($_POST['register'])) {
	$username = $_POST['fname'];
	$userlname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];

if (empty($username) && empty($userlname) && empty($email) && empty($password) && empty($gender)) {
	array_push($errors, "Empty Form");
}

if (count($errors) == 0) {
	//$password = md5($password_1);
	$sql = "INSERT INTO user (fname,lname,email,password,gender) VALUES ('$username','$userlname','$email','$password','$gender')";
	mysqli_query($db, $sql);
	$_SESSION['username'] = $username;
	header('location: home.php');
}

}

if(isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (empty($email) && empty($password)) {
		array_push($errors, "Please login");
	}

	if (count($errors) == 0) {
		//$password = md5($password_1);

		$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

		$result = mysqli_query($db,$query);
      	
      	$count = mysqli_num_rows($result);

		if ($count == 1) {
			$_SESSION['username'] = $username;
			header('location: home.php');
		}
		else{
			array_push($errors, "Invalid credentials");

		}
	}

}

if(isset($_POST['submit'])) {
	$username = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['mobile'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

if (empty($username) && empty($email) && empty($phone) && empty($subject) && empty($message)) {
	array_push($errors, "Empty Form");
}

if (count($errors) == 0) {
	//$password = md5($password_1);
	$sql = "INSERT INTO contact (name,email,phone,subject,message) VALUES ('$username','$email','$phone','$subject','$message')";
	mysqli_query($db, $sql);
	$_SESSION['success'] = "Your data Registered successfully";
	header('location: contact.php');
}

}

?>