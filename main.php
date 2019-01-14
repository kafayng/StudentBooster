<?php
	function LogIn($usuario, $pwd){
		require('db.php');
		if(mysqli_connect_error()){
			die("Connection failed: " . $conn->connect_error);
		}else{
			$result = ExisteUsuario($usuario, $pwd);
			if($result == 0){
				
			}else{

			}
		}
	}

	function ExisteUsuario($usuario, $pwd){
		require('db.php');
		$result = 1;
		if(mysqli_connect_error()){
			die("Connection failed: " . $conn->connect_error);
			return $result;
		}else{
			$query = "SELECT CASE WHEN EXISTS(SELECT 1 FROM estudiante) WHERE Nombre_Usuario = '$usuario' AND Contraseña = '$pwd')
			THEN 0 ELSE 1 END";
			$result = mysqli_query($conn, $query);
			return $result;
		}
	}

//0 = existe
// SELECT CASE WHEN EXISTS (
//     SELECT 1
//     FROM estudiante
//     WHERE Nombre_Usuario = 'Bryan1' AND Contraseña = 123
// )
// THEN 0
// ELSE 1
// END

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

	if(isset($_POST['submit'])){
		require('db.php');
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}else{
    	$nombre = filter_input(INPUT_POST, 'Nombre');
		$usuario = filter_input(INPUT_POST, 'Usuario');
		$carnet = filter_input(INPUT_POST, 'Carnet');
		$telefono = filter_input(INPUT_POST, 'Numero');
		$email = filter_input(INPUT_POST, 'Email');
		$descripcion = filter_input(INPUT_POST, 'Descripcion');
		$pwd = filter_input(INPUT_POST, 'Contraseña');
		$carrera = filter_input(INPUT_POST, 'Carrera');

		$query = "SELECT ID, Nombre from carrera";
		$result = mysqli_query($conn, $query);
		$IDcarrera = 1;
		if (mysqli_num_rows($result) > 0) {
		    while($row = $result->fetch_assoc()) {
		    	if($row['Nombre']==$carrera){
		    		$IDcarrera = (int)$row["ID"];	
		    	}
	    	}
		}else {
		    echo "0 resultados";
		}
		$insertQuery = "INSERT INTO estudiante(Carrera_ID, Nombre, Nombre_Usuario, Carnet, Telefono, Email, Descripcion, Contraseña) 
			VALUES('$IDcarrera', '$nombre', '$usuario', '$carnet', '$telefono', '$email', '$descripcion', '$pwd')";
		if(mysqli_query($conn, $insertQuery)){
    		echo "Se agregó el estudiante";
    	}else{
    		echo "Error" .mysqli_error($conn);
    	}
    	$conn->close();
	}
}
?>