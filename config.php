<?php

session_start();

$host = "mysqldb.cqjso4oooi09.us-east-1.rds.amazonaws.com"; /* Host name */
$user = "root"; /* User */
$password = "admin123"; /* Password */
$dbname = "customers"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
