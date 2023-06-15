
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>GFG- Store Data</title>
   </head>
   <?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "staff");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());		
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college VALUES ('$first_name',
			'$last_name','$gender','$address','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
   <body>
         <h1>Storing Form data in Database</h1>
         <form action="index.php" method="post">
             
<p>
               <label for="firstName">First Name:</label>
               <input type="text" name="first_name" id="firstName">
            </p>
 
             
<p>
               <label for="lastName">Last Name:</label>
               <input type="text" name="last_name" id="lastName">
            </p>
 
             
<p>
               <label for="Gender">Gender:</label>
               <input type="text" name="gender" id="Gender">
            </p>
 
             
<p>
               <label for="Address">Address:</label>
               <input type="text" name="address" id="Address">
            </p>
 
             
<p>
               <label for="emailAddress">Email Address:</label>
               <input type="text" name="email" id="emailAddress">
            </p>
 
            <input type="submit" value="Submit">
         </form>
   </body>
</html>