<!-- 
<div class="card card-body">
<h4 class="card-title">Boot Polish</h4>
<p class="card-text">Boot polish is a waxy paste, cream, or liquid used to polish, shine, and waterproof leather shoes or boots to extend the footwear's life, and restore, maintain and improve their appearance.</p>
<a href="#" class="btn btn-primary">More</a>
</div>
 -->

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "proyecto";

// Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {

  $sql = "SELECT Nombre, Tiempo, Costo, Empresa, Descripcion FROM Servicio";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

     	$str = "<div class=\"card card-body\">";
     	$str .=    "<h4 class=\"card-title\">". $row["Nombre"] ."</h4>";
     	$str .=          "<p class=\"card-text\">". $row["Descripcion"].".</p>";
     	$str .=         "<div class=\"card-footer\">";
     	$str .=            "<div class=\"row\">";
     	$str .=              "<div class=\"col-sm-4\">Tiempo:". $row["Tiempo"]."</div>";
     	$str .=              "<div class=\"col-sm-4\">Costo:". $row["Costo"]."</div>";
     	$str .=              "<div class=\"col-sm-4\">Empresa:". $row["Empresa"]."</div>";
     	$str .=            "</div> ";
     	$str .=          "</div>";

     	echo $str;
    }
  } else {
    echo "0 results";
  }
}
  $conn->close();
?> 