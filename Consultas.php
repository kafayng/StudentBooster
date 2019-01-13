<!DOCTYPE HTML>
<html>
  <head>
    <style>
      .error {color: #FF0000;}
    </style>
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
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "proyecto";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "Insert into `consulta`(`Fk_Usuario`, `Fk_Servicio`, `Consulta`) VALUES ('$usuario', '$servicio', '$consulta')";   
        $result = $conn->query($sql);
        $conn->close();
      }
    ?>

    <p><span class="error">* Espacio requerido</span></p>

    <h2>Añadir Consulta</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      ID de Usuario: <input type="text" name="name" value="<?php echo $name;?>">
      <span class="error">* <?php echo $nameErr;?></span>
      <br><br>
      ID de Servicio: <input type="text" name="email" value="<?php echo $email;?>">
      <span class="error">* <?php echo $emailErr;?></span>
      <br><br>
      Comentario: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
      <span class="error">* <?php echo $commentErr;?></span>
      <br><br>
      <input type="submit" name="submit" value="Enviar">
    </form>

  </body>
</html>