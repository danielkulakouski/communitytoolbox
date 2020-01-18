<?php
    include('header.php');
    include('login.php');
    include('register.php');
?>

<!DOCTYPE html>
    <body>
        <!-- <div class="toolscreen">
            <h1>Tools</h1>
            <input type="text" placeholder="Seach for tools..."/>
        </div> -->
        <div id="formwbuttons">
         <button class="formlink" onclick="openForm('login', this)" id="defaultOpen">Login</button>
         <button class="formlink" onclick="openForm('register', this)" id="badRegister">Create an Account</button>
        </div>

        <script>
        function openForm(formName, elmnt) {
          var tabcontent;
          tabcontent = document.getElementsByClassName("forms");
          for (var i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }



          // tablinks = document.getElementsByClassName("formlink");
          // for (i = 0; i < tablinks.length; i++) {
          //   tablinks[i].style.backgroundColor = "";
          // }
          document.getElementById(formName).style.display = "block";
          // elmnt.style.backgroundColor = color;

        }
        // Get the element with id="defaultOpen" and click on it
        <?php if(!array_filter($errors)) { ?>
          document.getElementById("defaultOpen").click();
        <?php } else { ?>
          document.getElementById("badRegister").click();
        <?php } ?>
        </script>
    </body>
</html>
