    <?php
    include('header.php');
    ?>

    <!DOCTYPE html>
    <body>
    	<!-- <div class="links"> -->
    		<div class="formButtons">
    			<a href="login.php" class="formlink">Login</a>
    			<a href="create_account.php" class="formlink">Register</a>
    		<!-- </div> -->
    	</div>
    	<div id="formwbuttons">
    		<div id="register">
    			<form id="register" action="includes/creare_account.inc.php" method="POST">
    				<p class="smalltext">First Name</p>
    				<input type="text" name="first"/>
    				<p class="smalltext">Last Name</p>
    				<input type="text" name="last"/>
    				<p class="smalltext">Email</p>
    				<input type="text" name="email"/>
    				<p class="smalltext">Password</p>
    				<input type="password" name="password"/>
    				<p class="smalltext">Re-enter Password</p>
    				<input type="password" name="pwdRe"/>
    				<br/>
    				<button type="submit" name="submit">Create Account</button>
    			</form>
    			<?php
    			$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    			if(strpos($fullUrl, "signup=empty") == true) {
    				echo "<p class='error'>You did not fill out all fields</p>";
    			}
    			if(strpos($fullUrl, "signup=invalidemail") == true) {
    				echo "<p class='error'>You entered an invalid email</p>";
    			}
    			if(strpos($fullUrl, "signup=emailexists") == true) {
    				echo "<p class='error'>The email you entered already exists</p>";
    			}
    			if(strpos($fullUrl, "signup=char") == true) {
    				echo "<p class='error'>You are using invalid charachters</p>";
    			}
    			if(strpos($fullUrl, "signup=pwd") == true) {
    				echo "<p class='error'>Your password is too short</p>";
    			}
    			if(strpos($fullUrl, "signup=error") == true) {
    				echo "<p class='error'>Please fill out the form</p>";
    			}
    			if(strpos($fullUrl, "signup=notmatch") == true) {
    				echo "<p class='error'>The passwords you entered did not match</p>";
    			}
    			if(strpos($fullUrl, "signup=success") == true) {
    				echo "<p class='success'>Your account was successfully created!</p>";
    				header("Location: home.php");
    			}
    			?>
    		</div>
    	</div>
    </body>
    </html>