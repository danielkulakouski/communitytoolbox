<?php
	session_start();
	if (isset($_POST['submit'])) {
		include_once 'dbh.inc.php';
		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$pwdRe = mysqli_real_escape_string($conn, $_POST['pwdRe']);
		$sql = "INSERT INTO Account (email, passcode, f_name, l_name) VALUES('$email', '$password', '$first', '$last');";
		$emailCheck = "SELECT * FROM Accounts WHERE email = '$email';";
		$emailCheckRow = mysqli_num_rows(mysqli_query($conn, $emailCheck));
		if(empty($first) || empty($last) || empty($emial) ||empty($password) || empty($pwdRe)) {
			header("Location: create_account.php?signup=empty");
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location: create_account.php?signup=invalidemail");
		}
		if ($emailCheckRow > 0) {
			header("Location: create_account.php?signup=emailexists");
		}
		if (!preg_match("/^[a-zA-Z]*$/", $first)||!preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: create_account.php?signup=char");
		}
		if (strlen($password) < 6) {
			header("Location: create_account.php?signup=pwd");
		}
		if($password !== $pwdRe) {
			header("Location: create_account.php?signup=notmatch");
		}
		mysqli_query($conn, $sql);
		$_SESSION["email"] = $email;
		header("Location: create_account.php?signup=success");
	}
	else {
		header("Location: /create_account.php?signup=error");
	}

?>