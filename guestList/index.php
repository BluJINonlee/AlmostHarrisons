    
    
    <!doctype html>
<html>
	<head>
	<title>List Users</title>
	<style>
		table {
		    width: 100%;
		}
		table td {
		    margin: 0px;
		    border: 0px solid black;
		    padding: 0px;
		}
		
		* {
			font-size: 1.1em;
		}
		body {
			max-width: 100%;
		}
	</style>
	
	</head>
	<body>
		hello
		<?php
			//mysqli_query($con,$sql) To run query.
			
			include_once "../connectDatabase.php";
			
			
			if (mysqli_connect_errno($con)) {
				echo mysqli_connect_error();
				echo " That didn't work, bro!";
			} else {
				echo "Connection to the database was successful!";
			}
			//GID INT AUTO_INCREMENT, firstName CHAR(20), lastName CHAR(20), email CHAR(50), response BOOLEAN, meal CHAR(1), PRIMARY KEY (GID)
			
			//Count Guest who have accepted
			$sql = "SELECT COUNT(*) AS 'Accepted Guest' FROM Guests WHERE response = 1";
			$results = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($results);
			$acceptedGuest = $row[0];
			echo "<br/><span style='color: #99FF66; font-weight: bold'>$acceptedGuest</span> guests have accepted!</br>";
			
			$sql = "SELECT COUNT(*) AS 'Declined Guest' FROM Guests WHERE response = 0";
			$results = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($results);
			$declinedGuest = $row[0];
			echo "<span style='color: #FF5050; font-weight: bold'>$declinedGuest</span> guests have declined...</br>";
			
			$sql = "SELECT COUNT(*) AS 'Undecided Guest' FROM Guests WHERE response is null";
			$results = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($results);
			$noResponse = $row[0];
			echo "<span style='color: gray; font-weight: bold'>$noResponse</span> guests have not responsed yet!</br>";
			
			$sql = "SELECT COUNT(*) FROM Guests WHERE meal = 'c' AND response != 0";
			$results = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($results);
			$chicken = $row[0];
			
			
			$sql = "SELECT COUNT(*) FROM Guests WHERE meal = 'f' AND response != 0";
			$results = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($results);
			$fish = $row[0];
			
			$sql = "SELECT COUNT(*) FROM Guests WHERE meal = 'v' AND response != 0";
			$results = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($results);
			$veggie = $row[0];
			
			
			echo "
				<table style='text-align:center'>
					<tr>
					    <th>Chicken</th>
					    <th>Fish</th>
					    <th>Eggplant</th>
					</tr>
					<tr>
					    <td>
						$chicken
					    </td>
					    <td>
						$fish
					    </td>
					    <td>
						$veggie
					    </td>
					</tr>
				</table>
			";
			
			$sql = "SELECT * FROM Guests Order By lastName";
			
			$color;

//creates table to list all the information in the database
			$results = mysqli_query($con,$sql);
			if($results) {
				echo "<table>";
				echo "<th>Last Name</th>";
				echo "<th>First Name</th>";
				echo "<th>Email Address</th>";
                		echo "<th>Meal</th>";
				
                //iterates through each result, and makes a row with the appropriate information.
				while($row = mysqli_fetch_array($results)){
					if($row['response']==1) {
					    $color = '#99FF66';
					} elseif($row['response']==0) {
					    $color = '#FF5050';
					}
					
					if($row['response']== NULL) {
					    $color = 'white';
					}
					
					echo "<tr style='background-color: $color'>";
					echo "<td>".$row['lastName']."</td>";
					echo "<td>".$row['firstName']."</td>";
                    if ($row['email'] ==NULL) {
                     echo "<td></td>";   
                    } else {
			echo "<td>".$row['email']."</td>";
		    }
                    echo "<td>";
		    if ($row['meal'] == 'c') {
			echo "Chicken";   
                    } elseif ($row['meal'] == 'f') {
			echo "Fish";
		    } elseif ($row['meal'] == 'v') {
			echo "Eggplant";
		    }
                    
                    
                    
					
                    
					echo "</tr>";
  				}
  				echo "</table> <br/>";
			} else {
				echo "Something went wrong!".mysqli_error($con);
			}
			
			

			
		
		?>
		
	</body>




</html>



