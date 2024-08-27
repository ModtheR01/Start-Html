<?php
$server = 'localhost';
$username = 'root';
$pass = '';
$db_name = 'school';
$connection = mysqli_connect($server, $username, $pass, $db_name);
if (!$connection) {
    die("Connection Failed");
}

//ADD 
$additem = "INSERT INTO students(name,address,grade,phone)
            Values('Ahmed', 'Suez', '500.25', '0102792874')";
if (mysqli_query($connection, $additem)) {
    echo "New record created successfully" . "<br>";
} else {
    echo "Error";
}
//    DELETE 
$sql = "DELETE FROM students WHERE id=7";

if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error";
}
//   UPDATE     
$sql = "UPDATE students SET name='Nagy', address='Cairo' WHERE id=9";
if (mysqli_query($connection, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error";
}
//   READ 
$sql = "SELECT * FROM students";
$stu = mysqli_query($connection, $sql);
if (mysqli_num_rows($stu) > 0) {
    while ($row = mysqli_fetch_assoc($stu)) {
        // echo "<br>" . "Name: " . $row['name'] . " - Address: " . $row['address'] . " - Grade: " . $row['grade'] . " - Phone: " . $row['phone'] . "<br>";
    }
} else {
    echo "No Students Found";
}
