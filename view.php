<?php
require 'db.php';

$sql = "SELECT * FROM tests";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Test Records</title>
</head>
<body>
    <h1>View Test Records</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Patient Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Test Date</th>
            <th>Test Result</th>
            <th>Remarks</th>
        </tr>
        <?php foreach ($results as $row) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['patient_name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['test_date']; ?></td>
                <td><?php echo $row['test_result']; ?></td>
                <td><?php echo $row['remarks']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
