<br>
<br>
<?php
   $query = "SELECT * FROM Patient";
   $result = $connection->query($query);
   echo "Select a patient to check vaccination status </br>";
   echo "</br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="patientname" value="';
        echo $row["OHIPNumber"];
        echo '">' . $row["FName"] . " " . $row["LName"] . "<br>";
   }
?>