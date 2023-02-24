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
                <th>Credentials</th>
            </tr>

            <!--- Get the value of the radio button.  This value contains the patients OHIP number  associated 
            with the name the patient selected on the radio button.--->
            <?php
            $whichClinic= $_POST["clinicname"];
            $query = "SELECT Doctor.FirstName, Doctor.LastName, DoctorIDCredentials.DoctorCredentials as Credentials \n"
            . "FROM Doctor, DoctorIDCredentials, DoctorWorksAt \n"
            . "WHERE Doctor.ID = DoctorWorksAt.DoctorID\n"
            . "AND DoctorWorksAt.VaxClinicName = \"$whichClinic\"\n"
            . "UNION \n"
            . "SELECT Nurse.FirstName, Nurse.LastName, NurseIDCredentials.NurseCredentials as Credentials \n"
            . "FROM Nurse, NurseIDCredentials, NurseWorksAt\n"
            . "WHERE Nurse.ID = NurseWorksAt.NurseID\n"
            . "AND NurseWorksAt.VaxClinicName = \"$whichClinic\";";

            $result=$connection->query($query);
            ?>

            <br>

            <?php while($row=$result->fetch()):?>
            <tr>
                <td><?php echo $row['FirstName'];?></td>
                <td><?php echo $row['LastName'];?></td>
                <td><?php echo $row['Credentials'];?></td>
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