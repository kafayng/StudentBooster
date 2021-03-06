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
	
	function formPerfil(){
		require('db.php');
		if ($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}else{

			$usuario = $_SESSION["user"];
			$query = "SELECT * from estudiante where Nombre_Usuario = '$usuario'";
			$result = mysqli_query($conn, $query);  
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					echo 
						"<div class='form-group'>
						<div class='col-xl'>
						<label for='Nombre'><h4>Nombre</h4></label>
						<input type='text' class='form-control' name='Nombre'
						id='Nombre' value=\"" .$row['Nombre'] . "\"disabled>
						</div>
						</div>";

					echo
						"<div class='form-group'>  
						 <div class='col-xl-12'>
						 <label for='Usuario'><h4>Usuario</h4></label>
						 <input type='text' class='form-control' name='Usuario'
						 id='Usuario' value=\"" .$row['Nombre_Usuario'] . "\"disabled>
						 </div>
						 </div>";

					echo
						"<div class='form-group'>  
						 <div class='col-xl'>
						 <label for='Carnet'><h4>Carnet</h4></label>
						 <input type='number' class='form-control' name='Carnet'
						 id='Carnet' value=\"" .$row['Carnet'] . "\"disabled>
						 </div>
						 </div>";

					echo 
						"<div class='form-group'>
						 <div class='col-xl'>
						 <label for='Telefono'><h4>Teléfono</h4></label>
						 <input type='text' class='form-control' name='Telefono'
						 id='Telefono' value=\"" .$row['Telefono'] . "\"disabled>
						 </div>
						 </div>";
					echo 
						"<div class='form-group'>
						 <div class='col-xl'>
						 <label for='Email'><h4>Email</h4></label>
						 <input type='email' class='form-control' name='Email'
						 id='Email' value=\"" .$row['Email'] . "\"disabled>
						 </div>
						 </div>";
					echo 
						"<div class='form-group'>
						 <div class='col-xl-12'>
						 <label for='Descripcion'><h4>Descripción</h4></label>
						 <input type='text' class='form-control' name='Descripcion'
						 id='Descripcion' value=\"" .$row['Descripcion'] . "\"disabled>
						 </div>
						 </div>";
				}
			}else{
				echo "0 results";
			}
		}
		$conn->close();
	}

	function ConsigueHistorial(){
		require('db.php');
		if ($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}else{
			$usuario = $_SESSION["user"];
			$query = "SELECT ID_Usuario FROM estudiante WHERE Nombre_Usuario = '$usuario'";
			$result = mysqli_query($conn, $query);
			while($row = $result->fetch_assoc()){
				$ID_Usuario = (int)$row["ID_Usuario"];
			}
			$query = "SELECT Servicio.Nombre, Calificacion_Estudiante, Calificacion_Empresa FROM trabajoxusuario
					INNER JOIN servicio	ON Servicio_ID = Servicio.ID WHERE Estudiante_Id_Usuario = '$ID_Usuario'";
			$result = mysqli_query($conn, $query);
			if($result->num_rows > 0){
				$Codigo = "";
				while($row = $result->fetch_assoc()){
					$Codigo .= "<tr><td>" .$row["Nombre"] . "</td>";
					$Codigo .= ($row["Calificacion_Estudiante"] == null) ? "<td>No hay calificación</td></tr>":"<td>" .$row["Calificacion_Estudiante"] . "</td>";
					$Codigo .= ($row["Calificacion_Empresa"] == null) ? "<td> <button type='submit' class='btn btn-primary btn-block'>Calificar empresa</button> </td>":"<td>" .$row["Calificacion_Empresa"] . "</td>";
					$Codigo .= "</tr>";					
				}
				echo $Codigo;
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
    		include("index.php");
    	}else{
    		echo "Error" .mysqli_error($conn);
    	}
    	$conn->close();
	}
	}


	if(isset($_POST['Usuario'])){
		if(isset($_POST['pwd'])){
			$usuario = filter_input(INPUT_POST, 'Usuario');
			$pwd = filter_input(INPUT_POST, 'pwd');	
			LogIn($usuario, $pwd);
		}
	}


	function insertarConsulta($usuario, $servicio, $consulta){
        require('db.php');
        if ($conn->connect_error){
          die("Connection failed: " . $conn->connect_error);
        }else{
          $sql = "Insert into `consultas`(`Fk_Usuario`, `Fk_Servicio`, `Consulta`) VALUES ('$usuario', '$servicio', '$consulta')";   
          $result = $conn->query($sql);
          $conn->close();
          header("Location: index.php"); /* Redirect browser */
  		  exit();
        }
     }
?>