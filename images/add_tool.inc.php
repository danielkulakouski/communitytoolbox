<?php
	session_start();
	include_once 'dbh.inc.php';
	$tool_name = mysqli_real_escape_string($conn, $_POST['tool_name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $email = $_SESSION["email"];
    $userQuery = "SELECT user_id FROM Acconts WHERE email = '$email';";
    $user_id = mysqli_query($conn, $userQuery);
	$sql = "INSERT INTO Tools (tool_name, user_id, price) VALUES('$tool_name', '$user_id', '$price');";
	if(empty($tool_name) || empty($price)) {
		header("Location: ../add_tool.php?signup=empty");
	}
	mysqli_query($conn, $sql);
	$_SESSION["email"] = $email;
	header("Location: ../add_tool.php?signup=success");
?>