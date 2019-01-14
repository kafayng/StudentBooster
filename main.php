<?php
	function OptionCarreras(){
		require('db.php');
		if (mysqli_connect_error()){
			die("Connection failed: " . $conn->connect_error);
		}else{
			$query = "SELECT * FROM carrera";
			$result = mysqli_query($conn, $query);  
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					echo "<option>" .$row["Nombre"] . "<option>";
				}
			}else{
				echo "0 results";
			}
		}
		$conn->close();
	}
	
	function formPerfil($usuario){
		require('db.php');
		if ($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}else{
			$query = "SELECT * from estudiante where Nombre_Usuario = '$usuario'";
			$result = mysqli_query($conn, $query);  
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					echo 
						"<div class='form-group'>
						<div class='col-xs-6'>
						<label for='Nombre'><h4>Nombre</h4></label>
						<input type='text' class='form-control' name='Nombre'
						id='Nombre' value=" .$row["Nombre"] . " disabled>
						</div>
						</div>";
					echo
						"<div class='form-group'>  
						 <div class='col-xs-6'>
						 <label for='Usuario'><h4>Usuario</h4></label>
						 <input type='text' class='form-control' name='Usuario'
						 id='Usuario' value=" .$row["Nombre_Usuario"] . " disabled>
						 </div>
						 </div>";

					echo
						"<div class='form-group'>  
						 <div class='col-xs-6'>
						 <label for='Carnet'><h4>Usuario</h4></label>
						 <input type='number' class='form-control' name='Carnet'
						 id='Carnet' value=" .$row["Carnet"] . " disabled>
						 </div>
						 </div>";

					echo 
						"<div class='form-group'>
						 <div class='col-xs-6'>
						 <label for='Telefono'><h4>Teléfono</h4></label>
						 <input type='text' class='form-control' name='Telefono'
						 id='Telefono' value=" .$row["Telefono"] . " disabled>
						 </div>
						 </div>";
					echo 
						"<div class='form-group'>
						 <div class='col-xs-6'>
						 <label for='Email'><h4>Email</h4></label>
						 <input type='email' class='form-control' name='Email'
						 id='Email' value=" .$row["Email"] . " disabled>
						 </div>
						 </div>";
					echo 
						"<div class='form-group'>
						 <div class='col-xs-6'>
						 <label for='Descripcion'><h4>Descripción</h4></label>
						 <input type='text' class='form-control' name='Descripcion'
						 id='Descripcion' value=" .$row["Descripcion"] . " disabled>
						 </div>
						 </div>";
				}
			}else{
				echo "0 results";
			}
		}
		$conn->close();
	}

	function ConsigueHistorial($usuario){
		require('db.php');
		if ($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}else{
			$query = "SELECT ID_Usuario FROM estudiante WHERE Nombre_Usuario = '$usuario'";
			$result = mysqli_query($conn, $query);
			while($row = $result->fetch_assoc()){
				$ID_Usuario = (int)$row["ID_Usuario"];
			}
			$query = "SELECT Servicio.Nombre, Calificacion_Estudiante FROM trabajoxusuario
					INNER JOIN servicio	ON Servicio_ID = Servicio.ID WHERE Estudiante_Id_Usuario = '$ID_Usuario'";
			$result = mysqli_query($conn, $query);
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					if($row["Calificacion_Estudiante"] == null){
						echo 
							"<tr><td>" .$row["Nombre"] . "</td>
							 <td>No hay calificación</td></tr>";
					}else{						
						echo 
							"<tr><td>" .$row["Nombre"] . "</td>
							 <td>" .$row["Calificacion_Estudiante"] . "</td></tr>";
					}
				}
			}
		}
		$conn->close();
	}
?>

<!-- 
	<tr>
	    <td>Alfreds Futterkiste</td>
	    <td>Maria Anders</td>
	</tr>
 -->

<!-- 

SELECT Servicio.Nombre, Calificacion_Estudiante 
FROM trabajoxusuario
	INNER JOIN servicio	
    	ON Servicio_ID = Servicio.ID
    WHERE Estudiante_Id_Usuario = 1
 -->