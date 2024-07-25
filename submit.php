<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_name = $_POST['patient_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $test_date = $_POST['test_date'];
    $test_result = $_POST['test_result'];
    $remarks = $_POST['remarks'];

    $sql = "INSERT INTO tests (patient_name, age, gender, test_date, test_result, remarks) 
            VALUES (:patient_name, :age, :gender, :test_date, :test_result, :remarks)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':patient_name', $patient_name);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':test_date', $test_date);
    $stmt->bindParam(':test_result', $test_result);
    $stmt->bindParam(':remarks', $remarks);

    if ($stmt->execute()) {
        echo "Record added successfully.";
    } else {
        echo "Error adding record.";
    }
}
?>
