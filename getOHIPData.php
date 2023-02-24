<br>
<br>
<?php
   $query = "SELECT * FROM VaccinationClinic";
   $result = $connection->query($query);
   echo "Select a clinic to view healthcare workers </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="clinicname" value="';
        echo $row["Name"];
        echo '">' . $row["Name"] ."<br>";
   }
?>