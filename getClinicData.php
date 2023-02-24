<?php
   $query = "SELECT * FROM VaccinationClinic";
   $result = $connection->query($query);
   echo "Please fill out the following information to record your vaccination.</br>";
   echo "</br>";
   while ($row = $result->fetch()) {
    echo '<input type="radio" name="clinicname" value="';
    echo $row["Name"];
    echo '">' . $row["Name"] ."<br>";
}
?>