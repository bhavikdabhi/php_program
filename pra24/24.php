<html>
<?php


$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "employee";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT emp_no, emp_name, designation , salary FROM EMP";
$result = mysqli_query($conn, $sql);


echo "<table>";
echo "<tr><th>Employee Number</th><th>Name</th><th>Designation</th><th>Salary</th></tr>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["emp_no"] . "</td><td>" . $row["emp_name"] . "</td><td>" . $row["designation"] . "</td><td>" . $row["salary"] . "</td></tr>";
}

echo "</table>";


mysqli_close($conn);

?>

