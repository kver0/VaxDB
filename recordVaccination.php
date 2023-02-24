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
        <form action="processOHIPForm.php" method="post">
            <form>
                <p>Please input your OHIP number:</p>
                <br>
                <input type="text" name="ohipnumber"> <br>
                <br>
                <input type="submit">
            </form>
    </div>
</body>

</html>