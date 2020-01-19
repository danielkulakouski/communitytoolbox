<?php
include('header.php');
?>

<!DOCTYPE html>
<body>
    <!-- <div class="links"> -->
        <div class="formButtons">
            <a href="login.php" class="formlink">Login</a>
            <a href="create_account.php" class="formlink">Register</a>
        </div>
    <!-- </div> -->

    <div id="formwbuttons">
        <div >
            <form  id="login" class="forms" action="login.php" method="POST">
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
