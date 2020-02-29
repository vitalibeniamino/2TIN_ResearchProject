<?php
// Use 'composer install' to get dependencies
// Remember to run tests using PHPUnit: 'vendor/bin/phpunit tests'

// composer autoload. Might require 'composer dump-autoload' to work.
require('vendor/autoload.php');

// Define mysql server settings
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "employees";

// Create a new mysqli connection. Remember to enable this in php.ini !!
$conn = new mysqli($serverName, $username, $password, $dbName);
// Build sql query and get results
$sql = "SELECT emp_no, first_name, last_name FROM employees";
$r = $conn->query($sql);
// Convert query results to Employee model
$employees = array();
while($row = $r->fetch_assoc()){
    $emp = new Employee($row["first_name"], $row["last_name"], $row["emp_no"]);
    array_push($employees, $emp);
}
// Print db results
echo "<h1>PXL - CI/CD Demo application</h1><hr/>";
echo "<ul>";
foreach ($employees as $emp){
    echo "<li>" . $emp->__toString() . "</li>";
}
echo "</ul>";

?>