<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include 'main.php';?>
  <ul>
    <li><a class="active" href="##Inicio">Inicio</a></li>
    <li><a href="#Ofertas">Ofertas</a></li>
    <li><a href="#Contacto">Contacto</a></li>
    <li id="Perfil" style="float:right"><a href="#IniciarSesion">Iniciar Sesión</a></li>
  </ul>
  <hr>
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
              <?php formPerfil('Bryan1') ?>
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
        <?php ConsigueHistorial('Bryan1') ?>
  </table>
</body>