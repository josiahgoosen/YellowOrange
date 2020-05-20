<?php  
       $servername = "ubuntu";  
       $username = "student";  
       $password = "CompSci364";
       $database = "data";
       $link = new mysqli ($servername , $username , $password, 
       							$database);  

		if(!$link){
    		die("ERROR: Could not connect. " . mysqli_connect_error());
		}
       	echo 'Successful Connection';
?>  
