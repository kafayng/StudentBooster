<!DOCTYPE html>
<html>
<head>

  <!-- jQuery library -->


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <!-- Latest compiled JavaScript -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ofertas</title>
  <link rel="stylesheet" href="css/style.css">
  <?php include "getOfertas.php"; ?>

  </head>
  <body  onload="filter(0)">
    <ul>
      <li><a class="active" onclick="location.href='index.php'">Inicio</a></li>
      <li><a href="#" onclick="location.href='ofertas.php'">Ofertas</a></li>
      <li><a href="#" onclick="location.href='Consultas.php'">Consultas</a></li>
      <li><a href="#" onclick="location.href='Perfil.php'">Perfil</a></li>
      <li style="float:right"><a href="#" onclick="document.getElementById('LoginForm').style.display='block'" style="width:auto;">Iniciar Sesión</a></li>
    </ul>

    <div class="container-fluid">
      <div class="row" style="margin-top: 20px;">
        <div class="col"></div>
        <button class="btn btn-primary dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filtrar por Categoría</button>
        <div class="dropdown-menu" aria-labelledby="about-us">
          <?php getDropdown() ?>
        </div>
        <div class="col"></div>
      </div>
    </div>
    <div id="ofertas"></div>
  </body>

<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
function filter(num){
	$.ajax({ url: 'getOfertas.php',
         data: {categoria: num},
         type: 'get',
         success: function(output) {
                      document.getElementById("ofertas").innerHTML = output;
                  }
});

}

</script>
</html>
