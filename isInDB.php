<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <tittle>Vaccine Availability</tittle>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include 'connectdb.php';
    ?>

    <form action="addNewVaxRecordDev.php" method="post">
        
        <?php
        echo "Welcome ", $fetchFirstName["FName"], "! </br>";
        include 'getClinicData.php';
        ?>
        <br>
        
        Lot Number: <input type="text" name="lotnumber"><br>
        <br>
        Date (yyyy-mm-dd): <input type="text" name="date"><br>
        <br>
        Time (hh:mm:ss): <input type="text" name="time"><br>
        <br>

        <input type="submit" value="Submit">
    </form>
    
    <?php
    $connection =- NULL;
    ?>

</body>

</html>