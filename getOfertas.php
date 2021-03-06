<?php

  function init($categoria){
  require('db.php');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT Nombre, Tiempo, Costo, Empresa, Descripcion FROM Servicio";
  if ($categoria != '0') {
    $sql .= " WHERE ID_Categoria = ".$categoria;
  }
  
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    $str = "   <div class=\"container-fluid\">";
    while($row = $result->fetch_assoc()) {
      $str .= " <div class=\"row\" style=\"margin-top:20px;\">";
      $str .= "   <div class=\"col\"></div>";
      $str .= "   <div class=\"col-8\">";
     	$str .= "       <div class=\"card card-body\" style=\"color: black\">";
     	$str .= "           <h4 class=\"card-title\">". $row["Nombre"] ."</h4>";
     	$str .= "           <p class=\"card-text\">". $row["Descripcion"].".</p>";
     	$str .= "           <div class=\"card-footer\">";
     	$str .= "               <div class=\"row\">";
     	$str .= "                   <div class=\"col\">Fecha: ". $row["Tiempo"]."</div>";
     	$str .= "                   <div class=\"col\">Costo: $". $row["Costo"]."</div>";
     	$str .= "                   <div class=\"col\">Empresa:". $row["Empresa"]."</div>";
     	$str .= "               </div>"; 
     	$str .= "           </div>";
      $str .= "       </div>";
     	$str .= "    </div>";
      $str .= "    <div class=\"col\"></div>";
      $str .= "  </div>";
      $str .= "</div>";
    }
  } else {
    $str = "0 results";
  }

    $conn->close();
    echo $str;
}



function getDropdown(){
  $resHTML = "<a class=\"dropdown-item\" onclick=\"filter(0)\">Todo</a>";

    require('db.php');
    if (mysqli_connect_error()){
      die("Connection failed: " . $conn->connect_error);
    }else{
      $query = "SELECT * FROM carrera";
      $result = mysqli_query($conn, $query);  
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $resHTML .= "<a class=\"dropdown-item\" onclick=\"filter(".$row["ID"].")\">".$row["Nombre"]."</a>";
        }
      }else{
        echo "0 results";
      }
    }
    $conn->close();
    echo $resHTML;
}


if (isset($_GET['categoria'])) {
  init($_GET['categoria']);
}


?> 