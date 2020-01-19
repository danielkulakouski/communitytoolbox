<!-- <!DOCTYPE html>
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
    </html> -->

    <?php
    include('header.php');
    ?>

    <!DOCTYPE html>
    <body>

        <!-- <div id="formButtons"> -->
            <!-- <button class="formlink" action="login.php">Login</button>
                <button class="formlink" action="register.php" id="badRegister">Create an Account</button> -->
                
                <a href="login.php" class="formlink">Login</a>
                <a href="register.php" class="formlink">Register</a>
                <!-- </div> -->

                <div id="formwbuttons">
                    <div id="login" >
                       <form class="loginform" action="login.php" method="POST">
                          <label>Email</label>
                          <br/>
                          <input type="text" name="email" placeholder=""  id="inputfield">
                          <br/>
                          <!-- Password -->
                          <label>Password</label>
                          <br/>
                          <input type="password" name="password" id="inputfield">
                          <br/>
                          <input type="submit" name="submit" value="Submit" id="submitbutton">
                      </form>
                      <?php
                      $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                      if(strpos($fullUrl, "login=failed") == true) {
                        echo "<p class='error'>The email and password did not macth</p>";
                    }
                    ?>
                </div>
            </div>
        </body>
        </html>
