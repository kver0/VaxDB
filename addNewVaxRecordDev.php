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
        <h1></h1>

        <!--- Get the value of the radio button.  This value contains the patients OHIP number  associated 
            with the name the patient selected on the radio button.--->
        <?php
            session_start();
            $ohip = $_SESSION['ohipnumber'];
            $whichClinic= $_POST["clinicname"];
            $lotNumber = $_POST["lotnumber"];
            $date = $_POST["date"];
            $time = $_POST["time"];
            echo "</br>";
            $queryAddRecord = "INSERT INTO Vaccination values('$ohip', '$whichClinic', '$lotNumber', '$date', '$time')";
            $result = $connection->exec($queryAddRecord);
            $query = 'SELECT FName, LName, VaxClinicName, Date, ProducedByCompany FROM Patient JOIN Vaccination ON Patient.OHIPNumber = Vaccination.PatientOHIPNumber JOIN Vaccine ON Vaccination.VaccineLotNmber = Vaccine.LotNumber WHERE Patient.OHIPNumber = "'. $ohip . '"';
            $result=$connection->query($query);
            ?>

        <?php
            if ($result == true){
                echo "Your vaccination was recorded! </br>";
                echo "</br>";
                echo "See your vaccination history below: </br>";
                echo "</br>";
                ?>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Clinic</th>
                <th>Date of Vaccination</th>
                <th>Vaccine Type</th>
            </tr>
            <?php while($row=$result->fetch()):?>
            <tr>
                <td><?php echo $row['FName'];?></td>
                <td><?php echo $row['LName'];?></td>
                <td><?php echo $row['VaxClinicName'];?></td>
                <td><?php echo $row['Date'];?></td>
                <td><?php echo $row['ProducedByCompany'];?></td>
            </tr>
            <?php endwhile;?>
        </table>
        <?php
            }
            else {
                echo "Insert unsuccesful, make sure you are inputting valid data";
            }
            ?>
        <br>
        <br>
        <br>
        <a href="recordVaccination.php">Click Here to Record Another Vaccination</a>

    </div>
</body>

</html>