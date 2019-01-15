<!DOCTYPE HTML>
<html>
  <head>
    <title>Consultas</title>
    <style>
      .error {color: #FF0000;}
    </style>
    <link rel="shortcut icon" href="images/logo.png" >
    <link rel="stylesheet" href="CSS/style.css">
    <?php include "imports.php" ?>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
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
        insertData($name, $email, $comment);
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      function insertData($usuario, $servicio, $consulta){
        require('db.php');
        if ($conn->connect_error){
          die("Connection failed: " . $conn->connect_error);
        }else{
          $sql = "Insert into `consultas`(`Fk_Usuario`, `Fk_Servicio`, `Consulta`) VALUES ('$usuario', '$servicio', '$consulta')";   
          $result = $conn->query($sql);
          $conn->close();
        }
      }
    ?>

    <?php include "Navigation.php" ?>

    <div class="container">
    <p><span class="error">* Espacio requerido</span></p>

    <h2>Cuéntanos cómo podemos ayudarte</h2><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      ID de Usuario: <span class="error">* <?php echo $nameErr;?></span>
      <input type="text" name="name" value="<?php echo $name;?>">
      <br><br>
      ID de Servicio: <span class="error">* <?php echo $emailErr;?></span>
      <input type="text" name="email" value="<?php echo $email;?>">
      <br><br>     
      Comentario: <span class="error">* <?php echo $commentErr;?></span>
      <textarea name="comment" class="form-control" rows="5"><?php echo $comment;?></textarea>
      <br><br>      
      <button type="submit" class="btn btn-primary btn-block">Enviar tu consulta o comentario</button>
    </form>
    <br><br> 

  </body>
</html>