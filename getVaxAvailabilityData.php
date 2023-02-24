<br>
<br>
<?php
   $query = "SELECT * FROM Company";
   $result = $connection->query($query);
   echo "Select a vaccine type to check availability </br>";
   echo "</br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="vaccinetype" value="';
        echo $row["Name"];
        echo '">' . $row["Name"] ."<br>";
   }
?>