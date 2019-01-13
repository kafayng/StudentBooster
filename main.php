<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "proyecto";

	$connect = mysqli_connect($hostname, $username, $password, $databaseName);
	$connect->set_charset("utf8");
	if (mysqli_connect_error()){
		die('Error de conexion('. mysqli_connect_error().')'. mysqli_connect_error());
	}else{
		$query = "Select * from carrera";
		$result = mysqli_query($connect, $query);  
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				echo "<option>" .$row["Nombre"] . "<option>";
			}
		}else{
			echo "0 results";
		}
	}
	$connect->close();
?>