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

        <!--- Open a connection to the database. --->

        <?php
        include 'connectdb.php';
        ?>

        <?php
        $ohipNumber= $_POST["ohipnumber"];
        $firstName = $_POST["firstname"];
        $lastName = $_POST["lastname"];
        $dateOfBirth = $_POST["dateofbirth"];
        echo "</br>";
    
        $queryAddPatient = "INSERT INTO Patient values('$ohipNumber', '$firstName', '$lastName','$dateOfBirth')";
        $result = $connection->exec($queryAddPatient);

        if ($result == true){
            echo "You have been added to the database!";
        }
        else {
            echo "Insert unsuccesful, make sure you are inputting valid data";
        }
    
        $connection = NULL;
        ?>

        <br>
        <br>
        <a href="recordVaccination.php">Click Here to Record Your Vaccination</a>

    </div>
</body>

</html>