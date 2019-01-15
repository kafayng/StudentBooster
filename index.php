<!DOCTYPE html>
<html>
<head>   
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Student Booster</title>
  <link rel="shortcut icon" href="images/logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="CSS/default.css">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/layout.css">

</head>

<body>
  <?php include "Navigation.php" ?>

  <div id="LoginForm" class="modal">
      <form class="modal-content" action="/action_page.php">
          <div class="imgcontainer">
              <span onclick="document.getElementById('LoginForm').style.display='none'" class="close" title="Close Modal">&times;</span>
              </span>
              <img src="Images/avatar.png" alt="Avatar" class="img-avatar">
          </div>
          <div class="container-Login">
            <label for="Usuario"><b>Usuario</b></label>
            <input type="text" placeholder="usuario" name="Usuario" required>
            <labe for "pwd"><b>Contraseña</b></labe>
            <input type="password" placeholder="*******" name="pwd" required>
            <button class="button-Login" type="submit">Iniciar Sesión</button>
          </div>
          <div class="container-Login" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('LoginForm').style.display='none'" class="btnSalir">Salir</button>
            <a style="float:right" href="Registro.php">Registrarse</a>
          </div>
      </form>
  </div>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <img src="Images/rusel1.png" style="width:100%;">
      </div>

      <div class="item">
        <img src="Images/rusel2.png" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="Images/rusel3.png" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  
   <section id="about">
      <div class="row">
         <div class="three columns">
            <img class="profile-pic" src="Images/logo1.png" alt=""/>
         </div>
         <div class="nine columns main-col">
            <h2>Cómo funciona StudentBooster</h2>
            <p>StudentBooster es una plataforma web que permite que estudiantes de diferentes carreras universitarias puedan ejecutar una serie de trabajos cortos con el fin de potenciar sus carreras. Para ello, cada uno de los estudiantes encontrará una serie de ofertas que fueron especificadas por diferentes empresas, con características propias de cada necesidad. Cada una de las ofertas se acompaña de un tiempo de entrega y una ganancia para el estudiantes, permitiéndole así elegir las que más le convengan. El estudiante puede ejecutar el trabajo en la forma que desee, siempre y cuando cumpla con las especificaciones da cada proyecto. Una vez que cada servicio ha sido desarrollado y validado, se procederá a pagar lo correspondiente. El estudiante no solamente genera dinero, sino que también obtiene experiencia con proyectos reales, teniendo así un mejor curriculum sin necesidad de dejar la universidad.</p>
         </div>
      </div>
   </section> 

  <section id="portfolio">
    <div class="row">
     <div class="twelve columns collapsed">
        <h1 style="color:black">¿Porqué elegir StudentBooster?</h1>
        <!-- portfolio-wrapper -->
          <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">
            <div class="columns portfolio-item">
              <div class="item-wrap">
                  <img alt="" src="Images/slide1.png" align="center">
                  <div class="overlay">
                    <div class="portfolio-item-meta">
                      <h4>Colaboración</h4>
                    </div>
                  </div>
              </div>
            </div> 

            <div class="columns portfolio-item">
              <div class="item-wrap">
                <img alt="" src="Images/slide2.png">
                <div class="overlay">
                  <div class="portfolio-item-meta">
                    <h4>Crecimiento personal</h4>
                  </div>
                </div>
              </div>
            </div> 

            <div class="columns portfolio-item">
              <div class="item-wrap">
                <img alt="" src="Images/slide3.png">
                <div class="overlay">
                  <div class="portfolio-item-meta">
                    <h4>Maximizar recursos</h4>
                  </div>
                </div>
              </div>
            </div> 

            <div class="columns portfolio-item">
              <div class="item-wrap">
                 <img alt="" src="Images/slide4.png">
                 <div class="overlay">
                    <div class="portfolio-item-meta">
                       <h4>Reputación</h4>
                    </div>
                 </div>
              </div>
            </div>
          </div> 
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3" align="center">
          <h3>Conecta con otros</h3>
          <p>Puedes conectarte con otros desarrolladores y empresarios de todo el mundo.</p>
        </div>
        <div class="col-sm-3" align="center">
          <h3>Potencia tu carrera</h3>
          <p>Puedes ganar experiencia elaborando proyectos reales con empresas reales.</p>
        </div>
        <div class="col-sm-3" align="center">
          <h3 align="center">Menores gastos</h3>        
          <p>No tienes que desplazarte ni pagar servicios extra por lo que ahorras dinero.</p>
        </div>
        <div class="col-sm-3" align="center">
          <h3>Mantiene la calidad</h3>        
          <p>Un sistema de reputación impulsa especificaciones y desarrollos de calidad.</p>
        </div>
      </div>
   </section> 



   <div class="row">
    <br>
    <h2 align="center" style="background-color:white">El proceso es muy sencillo</h1>
    <img alt="" src="Images/process.png" id="process">
    <br><br><br><br>
   </div>

   <footer id="footer">
      <div class="row">
         <div class="twelve columns">
            <br>
            <h3 style="color:DodgerBlue">Síguenos en redes sociales</h3>
            <div style="background-color:DodgerBlue" class="container">
              <ul class="social-links">
                 <li style="background-color:DodgerBlue"><a href="https://www.facebook.com" class="fa fa-facebook"></a></li>
                 <li style="background-color:DodgerBlue"><a href="https://www.instagram.com" class="fa fa-instagram"></a></li>
                 <li style="background-color:DodgerBlue"><a href="https://www.twitter.com" class="fa fa-twitter"></a></li>
                 <li style="background-color:DodgerBlue"><a href="https://www.linkedin.com" class="fa fa-linkedin"></a></li>
                 <li style="background-color:DodgerBlue"><a href="https://www.youtube.com" class="fa fa-youtube"></a></li>
                 <li style="background-color:DodgerBlue"><a href="https://www.google.com" class="fa fa-plus"></a></li>
              </ul>
            </div>
         </div>
         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#nav"><i class="icon-up-open"></i></a></div>
      </div>
   </footer> <!-- Footer End-->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>