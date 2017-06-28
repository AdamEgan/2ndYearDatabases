<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<a href="main.html">Home</a>
<div>
<form action="insert3.php" method="post">
    <p>
        <label for="staffid">Staff id:</label>
        <br>
        <input type="text" name="staff_Id" id="staffid">
    </p>
    <p>
        <label for="staffname">First Name:</label>
        <br>
        <input type="text" name="staff_name" id="staffname">
    </p>
    <p>
        <label for="lastname">Last Name:</label>
        <br>
        <input type="text" name="last_name" id="lastname">
    </p>
    <p>
        <label for="address">Address:</label>
        <br>
        <input type="text" name="address_1" id="address">
    </p>
    <p>
        <label for="telNo">Tel Number:</label>
        <br>
        <input type="text" name="tel_no" id="telNo">
    </p>
    <p>
        <label for="position">Position:</label>
        <br>
        <input type="text" name="position_1" id="position">
    </p>
    <p>
        <label for="sex">Sex:</label>
        <br>
        <input type="text" name="sex_1" id="sex">
    </p>
    <p>
        <label for="dob">DOB:</label>
        <br>
        <input type="text" name="D_O_B" id="dob">
    </p>
    <p>
        <label for="salary">Salary:</label>
        <br>
        <input type="text" name="salary_1" id="salary">
    </p>
    <p>
        <label for="nin">Nin:</label>
        <br>
        <input type="text" name="nin_1" id="nin">
    </p>
    <p>
        <label for="bno">Bno:</label>
        <br>
        <input type="text" name="branch_num" id="bno">
    </p>

    <input type="submit" value="Submit">
</form>
</div>
</body>
</html>