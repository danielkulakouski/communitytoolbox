<?php 
session_start();
include_once 'dbh.inc.php';
$query = "SELECT tool_name, price FROM Tools;";
$results = mysqli_query($conn, $query);
$tool_rows = mysqli_fetch_array($results);

while($tool_rows = mysqli_fetch_array($results)) {
	echo "Tool Name: ".($tool_rows['tool_name']);
} ?>
