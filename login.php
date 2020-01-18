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