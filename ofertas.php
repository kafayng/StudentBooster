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
  <title>Student Booster</title>
  <link rel="stylesheet" href="css/style.css">
  <?php include "getOfertas.php"; ?>

</head>
<body  onload="filter(0)">
  <ul>
    <li><a class="active" href="##Inicio">Inicio</a></li>
    <li><a href="#Ofertas">Ofertas</a></li>
    <li><a href="#Contacto">Contacto</a></li>
    <li id="Perfil" style="float:right"><a href="#IniciarSesion">Iniciar Sesión</a></li>
  </ul>




   </style> <div class="container-fluid">
   <br>
   <div class="dropdown">
   <button class="btn btn-primary dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   About Us
   </button>
   <div class="dropdown-menu" aria-labelledby="about-us">
   <a class="dropdown-item" onclick="filter(0)">Categoría 0</a>
   <a class="dropdown-item" onclick="filter(1)">Categoría 1</a>
   <a class="dropdown-item" onclick="filter(2)">Categoría 2</a>
   <a class="dropdown-item" onclick="filter(3)">Categoría 3</a>
   </div>
   </div>

   </div>
   <br> 
   <div id="ofertas">
   </div>
 </div> 
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
// 	$.get("/getOfertas.php?categoria="+num).done(function(data){
// 		document.getElementById("ofertas").innerHTML = num;
// });

}

</script>
</html>
