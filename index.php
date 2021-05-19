<!DOCTYPE html>
<html>
	<head>
		<title>Awsome PXL DevOps App!</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
        	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		        <a class="navbar-brand" href="#">PXL DevOps App</a>
        		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                		<span class="navbar-toggler-icon"></span>
		        </button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		                <div class="navbar-nav">
                			<a class="nav-item nav-link active" href="index.php">Home</a>
				        <a class="nav-item nav-link" href="add.php">Add employee</a>
					<a class="nav-item nav-link"> <?php echo gethostname(); ?></a>
				</div>
			</div>
		</nav>
        
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php
					$url = 'https://static-resources-s3-bucket.s3.amazonaws.com/';
					$files = array('fjords.jpg','lights.jpg','nature.jpg');

					foreach ($files as $key => $image) {
						// First item needs to get the active css class. Otherwise the carousel will not show
				                echo ($key == 2) ? '<div class="carousel-item active">' : '<div class="carousel-item">';
						echo "<img class='d-block w-100' src='$url$image'/></div>";
					}
				?>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<?php
			// Use 'composer install' to get dependencies
			// Remember to run tests using PHPUnit: 'vendor/bin/phpunit tests'

			// composer autoload. Might require 'composer dump-autoload' to work.
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

	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        	<script src="assets/js/bootstrap.min.js" ></script>
	</body>
</html>
