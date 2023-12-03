<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tarjeta Datos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="card.css">
    </head>
    <body>
        <div class="card">
            <div class="card image">
                <img src="https://www.conalepags.edu.mx/img/estudiante225x225.png" alt="alumno" width="150">
            </div>
            <div class="card data">
                <h2>Alumno</h2>
                Nombre: <?php echo $_POST['firstname'] . ' ' . $_POST['lastname'] ?><br>
                Edad: <?php echo $_POST['age'] . ' años' ?><br>
                Contacto: <?php echo $_POST['email'] ?>
            </div>
        </div>
    </body>
</html>
