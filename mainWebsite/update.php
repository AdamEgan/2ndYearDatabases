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
<form action="updateQuery.php" method="post">
    <p>
        <label for="staffnum">Staff_Num:</label>
        <br>
        <input type="text" name="staff_num" id="staffnum">
    </p>
    <p>
        <label for="address">Address:</label>
        <br>
        <input type="text" name="address" id="address">
    </p>
    <input type="submit" value="Submit">
</form>
</div>
</body>
</html>