<?php
$errors = array();
$db = mysqli_connect('localhost','root','','exp8');

if(isset($_POST['register'])) {
	$username = $_POST['name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$role = $_POST['role'];
	$name1 = $_POST['name1'];
	$name2 = $_POST['name2'];
	$name3 = $_POST['locality'];
	$comment = $_POST['comment'];


if (empty($username) && empty($email) && empty($age) && empty($role) && empty($name1) && empty($name2) && empty($name3) && empty($comment)) {
	array_push($errors, "Empty Form");
}

if (count($errors) == 0) {
	//$password = md5($password_1);
	$sql = "INSERT INTO surveys (name,email,age,role,outbreak,precautions,covidcase_locality,comment) VALUES ('$username','$email','$age','$role','$name1','$name2','$name3','$comment')";
	mysqli_query($db, $sql);
}

}

?>