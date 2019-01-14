<!DOCTYPE html>
<html>
<head>   
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Student Booster</title>
  <link rel="shortcut icon" href="images/logo.png" >
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/default.css">
  <link rel="stylesheet" href="CSS/layout.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
  <ul>
    <li><a class="active">Inicio</a></li>
    <li><a href="#" onclick="location.href='ofertas.php'">Ofertas</a></li>
    <li><a href="#" onclick="location.href='Consultas.php'">Consultas</a></li>
    <li><a href="#" onclick="location.href='Perfil.php'">Perfil</a></li>
    <li style="float:right"><a href="#" onclick="document.getElementById('LoginForm').style.display='block'" style="width:auto;">Iniciar Sesión</a></li>
  </ul>

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
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Images/carousel1.jpg" style="width:100%;">
      </div>

      <div class="item">
        <img src="Images/carousel2.jpg" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="Images/carousel3.jpg" style="width:100%;">
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
            <p>StudentBooster es una platarforma web que permite...</p>
         </div>
      </div>
   </section> 

  <section id="portfolio">
      <div class="row">
         <div class="twelve columns collapsed">

            <h1>¿Porqué elegir StudentBooster?</h1>

            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

               <div class="columns portfolio-item">
                  <div class="item-wrap">
                        <img alt="" src="images/icon1.png">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                          <h5>Ciclismo</h5>
                       </div>
                        </div>
                  </div>
              </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">
                     <img alt="" src="images/icon2.png">
                     <div class="overlay">
                        <div class="portfolio-item-meta">
                      <h5>Voluntariado</h5>
                   </div>
                     </div>
                  </div>
              </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">
                        <img alt="" src="images/icon3.png">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                          <h5>Caminar</h5>
                       </div>
                        </div>
                  </div>
              </div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">
                     <img alt="" src="images/icon4.png">
                     <div class="overlay">
                        <div class="portfolio-item-meta">
                      <h5>Ver gente</h5>
                   </div>
                     </div>
                  </div>
              </div> <!-- item end -->

            </div> <!-- portfolio-wrapper end -->
         </div> <!-- twelve columns end -->
   </section> <!-- Portfolio Section End-->

   <!-- footer
   ================================================== -->
   <footer id="footer">
      <div class="row">
         <div class="twelve columns">
            <h3>Síguenos en redes sociales</h3>
            <ul class="social-links">
               <li><a href="https://www.facebook.com/FranMongeZuniga/"><i class="fa fa-facebook"></i></a></li>              
               <li><a href="https://www.instagram.com/francisco_monge_zuniga/"><i class="fa fa-instagram"></i></a></li>
            </ul>
         </div>
         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>
      </div>
   </footer> <!-- Footer End-->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
