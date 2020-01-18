<<<<<<< HEAD
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Login</title>
    </head>
    <body>
        <div class="wrap">
            <h1>Login here</h1>
            <div class="content">
                <form action="#" method="POST">
                    <p>Email<p>
                    <input type="text" name="email"/>
                    <p>Password</p>
                    <input type="password" name="password"/>
                    <br/>
                    <button type="submit" name="submit">Login</button>
                </form>
                <?php
				    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				    if(strpos($fullUrl, "login=failed") == true) {
					    echo "<p class='error'>The email and password did not macth</p>";
				    }
			    ?>
                <p id=x>Don't have an account? Click <a href="create_account.php">here</a> to sign up.</p>
            </div>
        </div>
    </body>
</html>
=======
<div id="formwbuttons">
<div id="login" class="forms">
	<form class="loginform" action="login.php" method="POST">
		<label>Email</label>
		<br/>
		<input type="text" name="l_email" placeholder=""  id="inputfield">
		<!-- <?php echo $errors['email']; ?> -->
		<br/>
		<!-- Password -->
		<label>Password</label>
		<br/>
		<input type="password" name="l_password1" id="inputfield">
		<br/>
		<input type="submit" name="login" value="Login" id="submitbutton">
	</form>
</div>
</div>
>>>>>>> 85591959ec7bec6602268fff0de298ffd8ad5439
