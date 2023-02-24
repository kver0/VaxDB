<table>

    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Clinic</th>
        <th>Vaccine Type</th>
        <th>Lot Number</th>
        <th>Date</th>
        <th>Time</th>
    </tr>
    <br>
    <?php while($row=$result2->fetch()):?>
    <tr>
        <td><?php echo $row['FName'];?></td>
        <td><?php echo $row['LName'];?></td>
        <td><?php echo $row['Clinic'];?></td>
        <td><?php echo $row['ProducedByCompany'];?></td>
        <td><?php echo $row['LotNumber'];?></td>
        <td><?php echo $row['Date'];?></td>
        <td><?php echo $row['Time'];?></td>
    </tr>
    <?php endwhile;?>

</table>