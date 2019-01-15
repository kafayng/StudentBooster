<!DOCTYPE HTML>
<html>
  <head>
    <title>Consultas</title>
    <style>.error {color: #FF0000;}</style>
    <link rel="shortcut icon" href="Images/logo.png" >
    <link rel="stylesheet" href="CSS/style.css">
    <?php include "imports.php" ?>
    <?php include "main.php" ?>
  </head>

  <body>
    <?php
      // define variables and set to empty values    
      $name = $email = $comment = "";
      $nameErr = $emailErr = $commentErr = $resultDB = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "ID de Usuario es requirido";
        } else {
          $name = test_input($_POST["name"]);
          // check if ID_Usuario only contains numbers
          if (!preg_match("/^[1-9]*$/",$name)) {
            $nameErr = "Solo numeros son permitidos";
          }
        }
        if (empty($_POST["email"])) {
          $emailErr = "ID de Servicio es requerido";
        } else {
          $email = test_input($_POST["email"]);
          // check if ID_Servicio only contains numbers
           if (!preg_match("/^[1-9]*$/",$name)) {
            $emailErr = "Solo numeros son permitidos";
          }
        }
        if (empty($_POST["comment"])) {
          $commentErr = "Comentario es requerido";
        } else {
          $comment = test_input($_POST["comment"]);
        }

        //Insert into Data Base
        insertarConsulta($name, $email, $comment);    
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }      
    ?>

    <?php include "Navigation.php" ?>

    <div class="container">
    <p><span class="error">* Espacio requerido</span></p>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="card">
        <div class="card-header"> <h2>Cuéntanos cómo podemos ayudarte</h2></div>
        <div class="card-body">
          ID de Usuario: <span class="error">* <?php echo $nameErr;?></span>
          <input type="text" name="name" value="<?php echo $name;?>">
          <br><br>
          ID de Servicio: <span class="error">* <?php echo $emailErr;?></span>
          <input type="text" name="email" value="<?php echo $email;?>">
          <br><br>     
          Comentario: <span class="error">* <?php echo $commentErr;?></span>
          <textarea name="comment" class="form-control" rows="5"><?php echo $comment;?></textarea>
        </div> 
        <div class="card-footer">
          <button type="submit" class="btn btn-primary btn-block">Enviar tu consulta o comentario</button>
        </div>
      </div>
      </form>
      <br><br>
    </div>

  </body>
</html>