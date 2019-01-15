<!DOCTYPE html>
<html>
<head>



<?php include "imports.php" ?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ofertas</title>
  <link rel="shortcut icon" href="Images/logo.png" >
  <link rel="stylesheet" href="CSS/style.css">
  <?php include "getOfertas.php"; ?>

  </head>
  <body  onload="filter(0)">
    <?php include "Navigation.php"; ?>


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
