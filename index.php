<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="register">
            <h1>Registrar alumno</h1>
            <form action="card.php" method="post">
                <label class="register"for="firstname">Nombre:</label><br>
                <input class="register" type="text" name="firstname"><br>
                <label class="register"for="lastname">Apellidos:</label><br>
                <input class="register" type="text" name="lastname"><br>
                <label class="register"for="age">Edad:</label><br>
                <input class="register" type="number" name="age"><br>
                <label class="register"for="email">Correo:</label><br>
                <input class="register" type="email" name="email"><br>
                <label class="register"for="password">Contraseña:</label><br>
                <input class="register" type="password" name="password"><br>
                <input class="register" type="submit" value="Registrar">
            </form>
        </div>
    </body>
</html>
