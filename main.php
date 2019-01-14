<?php
	function OptionCarreras(){
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$databaseName = "proyecto";

		$connect = mysqli_connect($hostname, $username, $password, $databaseName);
		$connect->set_charset("utf8");
		if (mysqli_connect_error()){
			die('Error de conexion('. mysqli_connect_error().')'. mysqli_connect_error());
		}else{
			$query = "SELECT * FROM carrera";
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
	}
	
	function formPerfil($usuario){
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$databaseName = "proyecto";
		$connect = mysqli_connect($hostname, $username, $password, $databaseName);
		$connect->set_charset("utf8");
		if (mysqli_connect_error()){
			die('Error de conexion('. mysqli_connect_error().')'. mysqli_connect_error());
		}else{
			$query = "SELECT * from estudiante where Nombre_Usuario = '$usuario'";
			$result = mysqli_query($connect, $query);  
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
		$connect->close();
	}
?>






                     
  
    
      
  
			                         
              
                  
                  
              
            