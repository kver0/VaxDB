<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <tittle>Patient Directory</tittle>
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
                <th>First Name</th>
                <th>Last Name</th>
                <th>OHIP Number</th>
                <th>Date of Vaccination</th>
                <th>Vaccine Type</th>
            </tr>

            <!--- Get the value of the radio button.  This value contains the patients OHIP number  associated 
            with the name the patient selected on the radio button.--->
            <?php
            $whichPatient= $_POST["patientname"];
            $query = 'SELECT FName, LName, OHIPNumber, Date, ProducedByCompany FROM Patient JOIN Vaccination ON Patient.OHIPNumber = Vaccination.PatientOHIPNumber JOIN Vaccine ON Vaccination.VaccineLotNmber = Vaccine.LotNumber WHERE Patient.OHIPNumber = "'. $whichPatient . '"';

            $result=$connection->query($query);
            ?>

            <br>

            <?php while($row=$result->fetch()):?>
            <tr>
                <td><?php echo $row['FName'];?></td>
                <td><?php echo $row['LName'];?></td>
                <td><?php echo $row['OHIPNumber'];?></td>
                <td><?php echo $row['Date'];?></td>
                <td><?php echo $row['ProducedByCompany'];?></td>
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