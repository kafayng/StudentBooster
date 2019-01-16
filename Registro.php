<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" >
    <link rel="stylesheet" href="css/style.css">
	<title>Registro</title>
</head>
<body>
    <?php include 'main.php';?>
    <?php include 'Navigation.php';?>
    <?php include "imports.php" ?>
    <?php include "Login.php"?>
	<div class="container">
        <div class="card">
            <form action="main.php" method="POST" class="form-Registro">
                <div class="card-header"> <h2>Formulario de registro</h2></div>
                <div class="card-body">
                    <label class="label-Registro" for="Nombre">Nombre completo:</label>
                    <input class="input-Registro" type="text" name="Nombre" id="Nombre" required />
                    <label class="label-Registro" for="Usuario">Usuario:</label>
                    <input class="input-Registro"type="text" name="Usuario" id="Usuario" required />
                    <label class="label-Registro" for="Carnet">Carnet:</label>
                    <input class="input-Registro"type="number" name="Carnet" id="Carnet" required />
                    <label class="label-Registro" for="Numero">Número de teléfono</label>
                    <input class="input-Registro"type="text" name="Numero" id="Numero"  required />
                    <label class="label-Registro" for="email">Email:</label>
                    <input class="input-Registro"type="text" name="Email" id="Email" required />
                    <label class="label-Registro" for="Descripcion">Descripción</label>
                    <input class="input-Registro"type="text" name="Descripcion" id="Descripcion" required />
                    <label class="label-Registro" for="pwd">Contraseña:</label>
                    <input class="input-Registro"type="password" name="Contraseña" id="Contraseña" required />
                    <div class="select-list">
                        <label class="label-Registro"for="Carrera">Carrera:</label>
                        <select class="select-Registro" name="Carrera" id="Carrera">
                            <?php OptionCarreras() ?>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>