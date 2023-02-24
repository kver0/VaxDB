<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <tittle>Worker Directory</tittle>
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
        <form action="getWorkerDirectory.php" method="post">

            <?php
            include 'getWorkerDirectoryData.php';
            ?>

            <br>
            <input type="submit" value="View Workers">
        </form>

        <?php
        $connection = NULL;
        ?>

    </div>
</body>

</html>