<!DOCTYPE html>
<html>
    <head>
     <title>Awsome PXL DevOps App!</title>
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
    <h1>PXL - DevOps Demo application</h1><hr/>
        <?php
        // Use 'composer install' to get dependencies
        // Remember to run tests using PHPUnit: 'vendor/bin/phpunit tests'

        // composer autoload. Might require 'composer dump-autoload' to work.
        require('vendor/autoload.php');
        require_once('config.php');
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
        echo "<ul>";
        foreach ($employees as $emp){
            echo "<li>" . $emp->__toString() . "</li>";
        }
        echo "</ul>";

        ?>
    
        <script src="assets/js/bootstrap.min.js" ></sccript>
    </body>
</html>
