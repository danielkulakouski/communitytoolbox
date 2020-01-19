<?php
    session_start();
    include_once 'dbh.inc.php';
    $tool_name = mysqli_real_escape_string($conn, $_POST['tool_name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $email = $_SESSION["email"];
    $userQuery = "SELECT user_id FROM Acconts WHERE email = '$email';";
    $user_id_row = mysqli_query($conn, $userQuery);
    $user_id = mysqli_fetch_row($user_id_row);
    $sql = "INSERT INTO Tools (tool_name, user_id, price) VALUES('$tool_name', '".$user_id[0]."', '$price');";
    if(empty($tool_name) || empty($price)) {
        header("Location: ../add_tool.php?signup=empty");
    } else {
        mysqli_query($conn, $sql);
        header("Location: ../add_tool.php?signup=success");
    }
?>