<!doctype html>
<html>
	<head>
	<title>Populate Database</title>
	</head>
	<body>
		<?php
		//mysqli_query($con,$sql) To run query.
		
			//creating fake data to populate table.
			$firstName = array("Joshua","Jasmine","Lorna","Nathalie","Brian","George","Freddie","Lavell","Ebony","Keenan");
			$lastName = array("Harrison", "Douglas", "Harrell", "Henaine", "Roper", "Ellsey", "Simon", "Eaton", "Leaks", "Hightower");
			

			
					
			$con = mysqli_connect("localhost","root","","toy");
			
			if (mysqli_connect_errno()) {
				echo mysqli_connect_errno();
				echo " That didn't work, bro!";
			} else {
				echo "Connection to the database was successful!";
			}
			echo "<br/>";
			$counter = 0;
			for ($i = 0; $i <= mt_rand(1,100); $i++){
			//GID INT AUTO_INCREMENT, firstName CHAR(20), lastName CHAR(20), email CHAR(50), response BOOLEAN, meal CHAR(1), PRIMARY KEY (GID)
			$sql = "INSERT INTO Guests (firstName, lastName) VALUES(";
			$sql=$sql . "'". $firstName[mt_rand(0,9)] . "',"; //firstName
			$sql=$sql . "'". $lastName[mt_rand(0,9)] . "')"; //lastName
			
			if(mysqli_query($con,$sql)) {
				$counter++;
			} else {
				echo "Something went wrong:<br/> ".mysqli_error($con)."<br/>";
				echo "This is what the SQL looks like:<br/>" . $sql;
			}
			
		}
		echo $counter . " guest(s) have been added!";
		?>
	
	
	</body>




</html>