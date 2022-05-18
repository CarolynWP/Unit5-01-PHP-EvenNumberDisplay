<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" />

		<!-- Sweetgum Tree Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
    <link rel="manifest" href="./favicon/site.webmanifest" />
		
		<!-- title -->
    <title>Numbers</title>
	</head>
	
	<!-- Body -->
	<body>
		<div class="margin">
			<?php echo "<h1>I love numbers soooo much I made another website for it!</h1>" ?>
<?php echo '<img src="./images/number.png" width="200px" alt="Number guy but he is even more happy">' ?>
			<!-- minimum number text box -->
			<?php echo '<h2>Enter a minimum and maximum number!!! (still no decimals):</h2>' ?>
			<form method = "post">
				<?php echo '<p>Minimum number!:</p>' ?>
				<input type="number" name="min" step="1">  
				<br>
				
				<!-- maximum number text box -->
				<form method = "post">
				<?php echo '<p>Maximum number!</p>' ?>
				<input type="number" name="max" step="1">  
				<br>
				<br>
				<!-- button to sumbit your answer -->
				<input type = "submit" name = "submit" value="Enter">  
					<br>
				<!-- calculation -->
				<?php   
					if (isset($_POST["submit"])) {   
						// variables
						$min= $_POST["min"]; 
						$max= $_POST["max"]; 
						$counter= $min;
						$numbers = "";
						
						//while statement
							while ($counter <= $max){
								$numbers = $numbers . $counter . "<br>";
								$counter++;
							}
						
						//output
						echo $numbers;
					}
					?>
				</form>	
		</div>
	</body>
</html>