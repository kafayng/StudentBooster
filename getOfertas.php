<?php

  function init(){
  require('db.php');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT Nombre, Tiempo, Costo, Empresa, Descripcion FROM Servicio";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

     	$str .= "<div class=\"card card-body\" style=\"color: black\">";
     	$str .=  "<h4 class=\"card-title\">". $row["Nombre"] ."</h4>";
     	$str .=   "<p class=\"card-text\">". $row["Descripcion"].".</p>";
     	$str .=   "<div class=\"card-footer\">";
     	$str .=     "<div class=\"row\">";
     	$str .=       "<div class=\"col-sm-4\">Tiempo:". $row["Tiempo"]."</div>";
     	$str .=       "<div class=\"col-sm-4\">Costo:". $row["Costo"]."</div>";
     	$str .=       "<div class=\"col-sm-4\">Empresa:". $row["Empresa"]."</div>";
     	$str .=      "</div>"; 
     	$str .=    "</div>";
     	$str .=  "</div>";
    }
  } else {
    $str = "0 results";
  }

    $conn->close();
    echo $str;
}

function filter($cat) {

	echo ('0' === $cat) ? init() : "filter cat ".$cat;
	
  }


if (isset($_GET['categoria'])) {
  filter($_GET['categoria']);
}
?> 