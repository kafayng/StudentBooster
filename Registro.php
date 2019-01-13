<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
	<title>Registro</title>
</head>
<body>
	<div class="main">
        <div class="container">
            <form action="insert.php" method="POST" class="form-Registro">
                <h2>Formulario de registro</h2>
                <div class="form-group-1">
                    <label for="Nombre">Nombre completo:</label>
                    <input type="text" name="Nombre" id="Nombre" required />
                    <label for="Usuario">Usuario:</label>
                    <input type="text" name="Usuario" id="Usuario" required />
                    <label for="Carnet">Carnet:</label>
                    <input type="number" name="Carnet" id="Carnet" required />
                    <label for="Numero">Número de teléfono</label>
                    <input type="text" name="Numero" id="Numero"  required />
                    <label for="email">Email:</label>
                    <input type="email" name="Email" id="Email" required />
                    <label for="Descripcion">Descripción</label>
                    <input type="text" name="Descripcion" id="Descripcion" required />
                    <label for="pwd">Contraseña:</label>
                    <input type="password" name="Contraseña" id="Contraseña" required />
                    <div class="select-list">
                        <label for="Carrera">Carrera:</label>
                        <select name="Carrera" id="Carrera">
                            <?php include "main.php" ?>
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