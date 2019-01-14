<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Booster</title>
  <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
  <ul>
    <li><a class="active">Inicio</a></li>
    <li><a href="#Ofertas">Ofertas</a></li>
    <li><a href="#Contacto">Contacto</a></li>
    <li><a href="#Consultas">Consultas</a></li>
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
</body>
</html>

