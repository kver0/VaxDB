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

    <form action="addNewPatient.php" method="post">
        
        <br>
        OHIP Number: <input type="text" name="ohipnumber"><br>
        <br>
        First Name: <input type="text" name="firstname"><br>
        <br>
        Last Name: <input type="text" name="lastname"><br>
        <br>
        Date of Birth (yyyy-mm-dd): <input type="text" name="dateofbirth"><br>
        <br>

        <input type="submit" value="Submit">
    </form>
    
    <?php
    $connection =- NULL;
    ?>

</body>

</html>