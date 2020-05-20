<html>
<head>

<style>

table{

border-style:solid;

border-width:2px;

border-color:red;

}

</style>

</head>

<body bgcolor="#EEFDEF">


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
	
	echo "<table border='1'>
	<tr>
		<th>Squadron</th>
		<th>Cadet Name</th>
		<th>Class Year</th>
		<th>Total Form 10s</th>
		<th>Positive Form 10s</th>
	</tr>";

	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc() ){
			echo "<tr>";
			echo "<td>" . $row['squad'] . "</td>";
			echo "<td>" . $row['cadetName'] . "</td>";
			echo "<td>" . $row['classYear'] . "</td>";
			echo "<td>" . $row['total'] . "</td>";
			echo "<td>" . $row['pos'] . "</td>";
			echo "</tr>";
			

		}
	} 
	else {
		echo "0 records";
	}
?>
			<!--echo $row["squad"]."  ".
			     $row["cadetName"]."   ".
				 $row["classYear"]."   ".
				 $row["total"]."   ".
				 $row["pos"].
				 "<br>";-->


</body>
</html>
