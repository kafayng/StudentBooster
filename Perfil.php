<!DOCTYPE html>
<html>

<head>
  <title>Perfil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="Images/logo.png" >
  <link rel="stylesheet" href="CSS/style.css">
  <?php include "imports.php" ?>

</head>

<body>
  <?php include 'main.php';?>
  <?php include 'Navigation.php';?>


  <hr>
  <div class="main">
    <div class="container bootstrap snippet">

      <div class="row">

        <div class="col-sm-3"><!--left col-->     
          <div class="text-center">
            <img src="Images/avatar.png" class="avatar img-circle img-thumbnail" alt="avatar">
          </div>   
        </div><!--/col-3-->

        <div class="col-sm-9">     
          <div class="tab-content">
            <hr>
              <form class="form" action="##" method="post" id="registrationForm">   
                <?php formPerfil('MMurillo') ?>
              </form>              
            <hr> 
          </div><!--/tab-pane-->
        </div><!--/tab-content-->
      </div><!--/col-9-->
    </div><!--/row-->
  </br>
    <table>
      <tr>
        <th>Servicio</th>
        <th>Calificacion</th>
      </tr>
          <?php ConsigueHistorial('MMurillo') ?>
    </table>
  </div>
</body>
</html>