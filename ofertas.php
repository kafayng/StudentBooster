<!DOCTYPE html>
<html>
<head>

   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Booster</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <ul>
    <li><a class="active" href="##Inicio">Inicio</a></li>
    <li><a href="#Ofertas">Ofertas</a></li>
    <li><a href="#Contacto">Contacto</a></li>
    <li id="Perfil" style="float:right"><a href="#IniciarSesion">Iniciar Sesión</a></li>
  </ul>


  <div id="filter">
    <select id="animal" name="animal">                      
      <option value="0">--Select Animal--</option>
      <option value="Cat">Cat</option>
      <option value="Dog">Dog</option>
      <option value="Cow">Cow</option>
    </select>

    <!-- if($_POST['submit'] && $_POST['submit'] != 0)
    {
       $animal=$_POST['animal'];
    } -->
  </div>
  <div id="ofertas">
    <?php include "getOfertas.php"; ?>
  </div>
</body>
</html>
