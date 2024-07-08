<?php
// database connection code
$con = mysqli_connect('localhost', 'root', '','dn_contact');

// check database connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtAddress = $_POST['txtAddress'];

// database insert SQL code
$sql = "INSERT INTO `CUSTOMERS` (`CUST_NAME`, `CUST_PHONE`, `CUST_EMAIL`, `CUST_ADDRESS`) 
        VALUES (?, ?, ?, ?)";

// create prepared statement
$stmt = mysqli_prepare($con, $sql);

// bind parameters to prepared statement
mysqli_stmt_bind_param($stmt, "ssss", $txtName, $txtPhone, $txtEmail, $txtAddress);

// execute prepared statement
if (mysqli_stmt_execute($stmt)) {
  echo "Customer Records Inserted";
} else {
  echo "Error: " . mysqli_error($con);
}

// close prepared statement
mysqli_stmt_close($stmt);

// close database connection
mysqli_close($con);
?>