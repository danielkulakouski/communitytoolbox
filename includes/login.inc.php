<?php
	session_start();
	include_once 'dbh.inc.php';
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$sql = "SELECT * FROM Acconts WHERE email = '$email' AND passcode = '$password';";
	$result = mysqli_query($conn, $sql);
	$check = mysqli_num_rows($result);
	if($check > 0) {
		$_SESSION["email"] = $email;
		header("Location: ../home.php");
	}
	else {
		header("Location: ../login.php?login=failed");
	}
?>