<?php
	if (isset($_SESSION["user"])) {
	    echo "
	    	<script>
				function LogOut(){
					$.ajax({
					  type: \"POST\",
					  url: \"session.php\",
					  data: {logout : \"logout\"}
					}).done(window.location = \"index.php\");
				}
			</script>
			
			<ul  id=\"nav\">
		    <li><a href=\"index.php\">Inicio</a></li>
		    <li><a  href=\"ofertas.php\">Ofertas</a></li>
		    <li><a  href=\"Consultas.php\">Consultas</a></li>
		    <li><a  href=\"Perfil.php\">Perfil</a></li>
		    <li style=\"float:right\"><a href=\"#\" onclick=\"LogOut()\" style=\"width:auto;\">Cerrar Sesión</a></li>
		 	</ul>	
		 	
	    	";
	}else{
		echo "
		 	<ul  id=\"nav\">
		    <li><a href=\"index.php\" >Inicio</a></li>
		    <li><a href=\"ofertas.php\" >Ofertas</a></li>
		    <li style=\"float:right\"><a href=\"#\" onclick=\"document.getElementById('LoginForm').style.display='block'\" style=\"width:auto;\">Iniciar Sesión</a></li>
		 	</ul>
	    	";
	}

?>