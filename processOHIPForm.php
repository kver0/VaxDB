<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <tittle>Record Vaccination</tittle>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include 'connectdb.php';
    ?>

    <h1>Covid Vaccine Database
        <img class="img-icon" src="icon.png" alt="vaxicon">
    </h1>
    <nav>
        <div class="wrapper">
            <ul>
                <li><a href="covid.html">Home</a></li>
                <li><a href="recordVaccination.php">Record Vaccination</a></li>
                <li><a href="vaccineAvailability.php">Vaccine Availability</a></li>
                <li><a href="patientDirectory.php">Patient Directory</a></li>
                <li><a href="workerDirectory.php">Worker Directory</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </div>
    </nav>
    <div class="wrapper">
        <br>
        <br>
        <?php
        session_start();
        $ohip= $_POST["ohipnumber"];
        $_SESSION['ohipnumber'] = $ohip;
        $queryFirstName = 'SELECT FName FROM Patient WHERE Patient.OHIPNumber = "'. $ohip . '"';
        $resultQueryFirstName = $connection->query($queryFirstName);
        $fetchFirstName = $resultQueryFirstName->fetch();

        $ohipExists = 'SELECT OHIPNumber FROM Patient WHERE Patient.OHIPNumber = "'. $ohip . '"';
        $resultNum = $connection->query($ohipExists);
        ?>

        <?php
        if ($row = $resultNum->fetch()){
            include 'isInDB.php';
        } else {
            echo "It looks like you have not been registered into the database.</br>";
            echo "Please re-enter your OHIP number as well as the following information: </br>";
            include 'notInDB.php';
        }
        ?>

    </div>
</body>

</html>