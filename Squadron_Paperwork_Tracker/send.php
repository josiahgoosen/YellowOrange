<?php  
       $servername = "localhost";  
       $username = "student";  
       $password = "CompSci364";
       $database = "data";
       $link = new mysqli ($servername, $username , $password, 
       							$database);  

		if(!$link){
    		die("ERROR: Could not connect. " . mysqli_connect_error());
		}
       	
       	// Escape user inputs for security
	$squad = mysqli_real_escape_string($link, $_REQUEST['squad']);
	$cadetName = mysqli_real_escape_string($link, $_REQUEST['cadetName']);
	$classYear = mysqli_real_escape_string($link, $_REQUEST['classYear']);
	$form10 = mysqli_real_escape_string($link, $_REQUEST['form10']);

	$sql = "INSERT INTO cadet (squad, cadetName, classYear, form10) VALUES ('$squad', 				'$cadetName', '$classYear', '$form10')";
	if(mysqli_query($link, $sql)){
	    echo "Record added successfully.";
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
?>  
