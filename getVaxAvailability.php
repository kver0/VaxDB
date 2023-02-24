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

        <!--- Headers for the table --->
        <h1></h1>
        <table>

            <tr>
                <th>Clinic</th>
                <th>Doses</th>
            </tr>

            <!--- Get the value of the radio button.  This value contains the type of vax selected on the radio button.--->
            <?php
            $whichVax= $_POST["vaccinetype"];
            echo "<p>" . $whichVax . " Availability: " . "</p>";
            $query = 'SELECT VaccineClinicName, NumberOfDoses FROM ShipsTo, Vaccine WHERE Vaccine.LotNumber = ShipsTo.VaccineLotNumber AND Vaccine.ProducedByCompany = "'. $whichVax . '"';
            $result=$connection->query($query);
            ?>

            <br>

            <?php while($row=$result->fetch()):?>
            <tr>
                <td><?php echo $row['VaccineClinicName'];?></td>
                <td><?php echo $row['NumberOfDoses'];?></td>
            </tr>
            <?php endwhile;?>

        </table>

        <!--- Close the connection to the database. --->
        <?php
        $connection = NULL;
        ?>

    </div>
</body>

</html>