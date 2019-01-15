<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
	<title>Registro</title>
</head>
<body>
    <?php include 'main.php';?>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="#Ofertas">Ofertas</a></li>
        <li><a href="#Contacto">Contacto</a></li>
        <li><a href="#Consultas">Consultas</a></li>
        <li id="Perfil" style="float:right"><a href="#IniciarSesion">Iniciar Sesión</a></li>
    </ul>
	<div class="main-registro">
        <div class="container">
            <form action="main.php" method="POST" class="form-Registro">
                <h2>Formulario de registro</h2>
                <div class="form-group-1">
                    <label class="label-Registro" for="Nombre">Nombre completo:</label>
                    <input class="input-Registro" type="text" name="Nombre" id="Nombre" required />
                    <label class="label-Registro" for="Usuario">Usuario:</label>
                    <input class="input-Registro"type="text" name="Usuario" id="Usuario" required />
                    <label class="label-Registro" for="Carnet">Carnet:</label>
                    <input class="input-Registro"type="number" name="Carnet" id="Carnet" required />
                    <label class="label-Registro" for="Numero">Número de teléfono</label>
                    <input class="input-Registro"type="text" name="Numero" id="Numero"  required />
                    <label class="label-Registro" for="email">Email:</label>
                    <input class="input-Registro"type="email" name="Email" id="Email" required />
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
                <div class="form-submit">
                    <input type="submit" name="submit" class="submit" value="Registrarse" />
                </div>
            </form>
        </div>
    </div>
</body>
</html>