<!DOCTYPE html>
<html>
<head>
    <title>Nipah Virus Testing Management</title>
</head>
<body>
    <h1>Nipah Virus Testing Management System</h1>
    <form action="submit.php" method="post">
        <label for="patient_name">Patient Name:</label>
        <input type="text" id="patient_name" name="patient_name" required><br><br>
        
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>
        
        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>
        
        <label for="test_date">Test Date:</label>
        <input type="date" id="test_date" name="test_date" required><br><br>
        
        <label for="test_result">Test Result:</label>
        <select id="test_result" name="test_result">
            <option value="Pending">Pending</option>
            <option value="Positive">Positive</option>
            <option value="Negative">Negative</option>
        </select><br><br>
        
        <label for="remarks">Remarks:</label><br>
        <textarea id="remarks" name="remarks" rows="4" cols="50"></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
