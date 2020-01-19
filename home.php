<!DOCTYPE html>
<html>
<?php
  session_start();
  include('homeHeader.php');
?>

    <body>
      <?php 
            include_once 'includes/dbh.inc.php';
            $query = "SELECT tool_name, price FROM Tools;";
            $results = mysqli_query($conn, $query);
            // $tool_rows = mysqli_fetch_array($results);
            echo "<table border='1'>";
            while($row = mysqli_fetch_assoc($results)) {
              echo "<tr>";
              foreach($row as $field => $value) {
                echo "<td>" . $value . "</td>";
              }
              echo "</tr>";
                // echo "Tool Name: ".($tool_rows['tool_name']);
              // }
            } 
            echo "</table>"?>
    </body>

</html>