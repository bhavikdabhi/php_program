<?php


$conn = mysqli_connect("localhost:8090", "root", "","pr22");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE customer_info SET cust_name = 'Bob' WHERE cust_no = 1";
if (mysqli_query($conn, $sql)) {
    echo "Customer name updated successfully"."<br>";
} else {
    echo "Error updating customer name: " . mysqli_error($conn);
}

$sql = "DELETE FROM customer_info WHERE cust_no = 3";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>

