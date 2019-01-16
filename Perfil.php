
<!DOCTYPE html>
<html>

<head>
  <title>Perfil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="Images/logo.png" >
  <link rel="stylesheet" href="CSS/style.css">
  <?php include "imports.php" ?>
  <?php include 'main.php';?>
</head>

<body>
  <?php require("session.php");?>

  <?php include "Login.php"?>
  <?php include 'Navigation.php';?>
  <div class="main">
    <h1 align="center">Mi Perfil</h1>
    <div class="container bootstrap snippet">

      <div class="row">

        <div class="col-sm-3"><!--left col-->     
          <div class="text-center">
            <br>
            <img src="Images/avatar.png" class="avatar img-circle img-thumbnail" alt="avatar">
          </div>   
        </div><!--/col-3-->

        <div class="col-sm-9">     
          <div class="tab-content">
            
              <form class="form" action="##" method="post" id="registrationForm">   
                <?php formPerfil() ?>
              </form>              
          </div><!--/tab-pane-->
        </div><!--/tab-content-->
      </div><!--/col-9-->
      <hr>
    </div><!--/row-->

  </br>
  <h1 align="center">Servicios realizados</h1><br>
  <div class="container">
    <table>
      <tra>
        <th>Servicio</th>
        <th>Calificación Estudiante</th>
        <th>Calificación Empresa</th>
      </tra>
          <?php ConsigueHistorial() ?>
    </table>
  </div>
  </div>
</body>
</html>