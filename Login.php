
  <div id="LoginForm" class="modal">
      <form class="modal-content" action="index.php" method="POST">
          <div class="imgcontainer">
              <span onclick="document.getElementById('LoginForm').style.display='none'" class="close" title="Close Modal">&times;</span>
              </span>
              <img src="Images/avatar.png" alt="Avatar" class="img-avatar">
          </div>
          <div class="container-Login">
            <label for="Usuario"><b>Usuario</b></label>
            <input type="text" placeholder="usuario" name="Usuario" required>
            <label for "pwd"><b>Contraseña</b></label>
            <input type="password" placeholder="*******" name="pwd" required>
            <button class="button-Login" type="submit">Iniciar Sesión</button>
          </div>
          <div class="container-Login" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('LoginForm').style.display='none'" class="btnSalir">Salir</button>
            <a style="float:right" href="Registro.php">Registrarse</a>
          </div>
      </form>
  </div>