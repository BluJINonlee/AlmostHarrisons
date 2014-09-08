<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"/>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>RSVP | Almost Harrisons</title>
    <?php include_once "HTMLhead.php"; ?>
</head>

<body>
    
  <?php include_once("header.php"); ?>
   


	
<div class="grid-container" >
	<div class="grid-100 center">
		<h1>Thank You for Responding</h1>
		<h2>Please enter your last name we'll see if you're on the list!</h2>
        
        
		<div class="grid-container">
			
		
		
			<form action="RSVP.php" method="get">
               
                <div class="grid-30 push-30">
				    <input id="lastName" type="text" name="lastName" placeholder="Last Name"/>
                </div>
                <div class="grid-15 push-35">
				<input class="primary button" type="submit" value="Find Name">
                </div>
            </form>
			
		</div>
	</div>
</div>
		
		
		<script>
		document.onload = document.getElementById("lastName").focus();
		
		</script>
<?php
//mysqli_query($con,$sql) To run query.
include_once "sanitize.php";



	if ($_GET) {
	
		include_once "connectDatabase.php";
		
		if (mysqli_connect_errno()) {
			echo mysqli_connect_errno();
			echo "
            <div class='grid-container'>
                <div class='grid-100'>
                    <br/> There was a problem connecting to the database.
                </div>
            </div>
            ";
		} else {
            /* echo "
             <div class='grid-container'>
                <div class='grid-100'>
                    <br/> Connection to the database was successful!<br/>
                </div>
            </div>
            "; */
		
			//UID INT, firstName CHAR(20), lastName CHAR(20), phone CHAR(10), email CHAR(50), address1 CHAR(50), address2 CHAR(20), meal CHAR(1), plusOne CHAR(1), PRIMARY KEY (UID)
			$sql = "SELECT * FROM Guests WHERE lastName Like '".sanitize($_GET["lastName"])."%';";
			
			$results = mysqli_query($con,$sql);
			//if result come back
			if($results) {
				//if there are any records in the table.
                echo "
                        <div class='clear'></div>
                        <div class='grid-container'>
                            <div class='grid-50 push-25 center'>
                    ";
				if (mysqli_num_rows($results)!=0){
					
                    
                    
                    if(mysqli_num_rows($results) > 1){
						
                        echo "<h2>Which {$_GET['lastName']} are you?</h2>";
                            
					} else {
						echo "<h2>Is this you?</h2>";
					}
					
                    echo "
                            
                        </div>
                    </div>
                    ";

					
					
					while($row = mysqli_fetch_array($results)){
					
					echo "
                        <div class='grid-container'>
                            <div class='grid-100 guest'>
                                <div class='grid-100'>
                                   <a href='response.php?GID={$row['GID']}&firstName={$row['firstName']}'> {$row['firstName']} {$row['lastName']}
                                </div>
                                
                            </div>
                        </div>
                        <div class='clear'></div>
                    
                    ";

					
					
					
					//	echo $row['firstName']." ". $row['lastName']."<br/>";
					
					
					
					
					
					
	  											
					
					
					
					}
					

  				
  				} else {
  					echo "
                    <h2>There is no one by that name...</h2>
                    If you received an invitation, and you cannot find your name, please contact Josh at <strong><u><a href='mailto:joshua@almostharrisons.com'>joshua@almostharrisons.com</a></u></strong>.
                    ";
                      echo "
                            
                        </div>
                    </div>
                    ";
  				}
			} else {
				echo "Something went wrong!".mysqli_error($con);
			}
		
		}
		
	}

?>
    
   <?php include_once("footer.php"); ?>
 
</body>

</html>
