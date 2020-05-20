<?php  
       $servername = "localhost";  
       $username = "student";  
       $password = "CompSci364";
       $database = "student";
       $link = new mysqli ($servername, $username , $password, 
       							$database);  

		if(!$link){
    		die("ERROR: Could not connect. " . mysqli_connect_error());
		}
       	
       	// Escape user inputs for security
	$squad = mysqli_real_escape_string($link, $_REQUEST['squad']);
	$cadetName = mysqli_real_escape_string($link, $_REQUEST['cadetName']);
	$classYear = mysqli_real_escape_string($link, $_REQUEST['classYear']);
	$type = NULL;
	if($_REQUEST['form10'] == 'TRUE'){
		$type = 'TRUE';
	}
	else{
		$type = 'FALSE';
	}
	//TODO: SQL INJECTION PROTECTION
	
	$sql = "INSERT INTO cadet (squad, cadetName, classYear, type) VALUES ('$squad', '$cadetName', '$classYear', $type)";
	
	if(mysqli_query($link, $sql)){
	    echo "Record added successfully.";
	} else{
	    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
	}
?>  
