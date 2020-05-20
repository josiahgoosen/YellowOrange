<?php
/* Embedding account credentials isn't ideal...preferable to
 * store in a separate file that is included by PHP (and not
 * accessible to others)
 */
 
	$search = $_POST['search'];
	$column = $_POST['column'];

       $servername = "localhost";  
       $username = "student";  
       $password = "CompSci364";
       $database = "student";
       
       $link = new mysqli ($servername, $username , $password, 
       							$database);  
						 
	if($link === false){
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	$sql = "SELECT cadetName, classYear, squad, SUM(type) as pos, COUNT(type) as total
			FROM cadet 
			WHERE $column like '%$search%'
			GROUP BY classYear, cadetName, squad"; 
			
	//TODO: SQL INJECTION PROTECTION
	$result = $link->query($sql);

	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc() ){
			echo $row["cadetName"]."  ".$row["squad"]."  ".$row["classYear"]."   ".$row["total"]."   ".$row["pos"]."<br>";
		}
	} 
	else {
		echo "0 records";
	}
?>
